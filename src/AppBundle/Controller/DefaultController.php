<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Application;
use AppBundle\Form\ApplicationType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        return $this->registrationAction($request);

        $regApplicationForm = $this->createForm(new ApplicationType(), new Application());
        $regApplicationForm->add('submit', 'submit', array(
            'label' => 'Attempt to register',
            'attr'  => array('class' => 'btn btn-default btn-block')
        ));


        // replace this example code with whatever you need
        return $this->render(
            'default/index.html.twig',
            array('form' => $regApplicationForm->createView())
        );
    }

    /**
     * @Route("/attended", name="attended")
     */
    public function attendedMembers(Request $request)
    {
        $applications = $this->getDoctrine()->getManager()
            ->getRepository('AppBundle:Application')
            ->findAll()
            ;

        return $this->render(
            'default/attended.html.twig',
            array(
                'applications' => $applications
            )
        );
    }

    /**
     * @Route("/registration", name="registration")
     */
    public function registrationAction(Request $request)
    {

        $regApplicationForm = $this->createForm(new ApplicationType(), new Application());
        $regApplicationForm->add('submit', 'submit', array(
            'label' => 'Create',
            'attr'  => array('class' => 'btn btn-default btn-block')
        ));

        $regApplicationForm->handleRequest($request);

        if($request->isMethod('post')) {
            if ($regApplicationForm->isValid()) {
                // ... perform some action, such as saving the task to the database

                $this->get('session')->getFlashBag()
                    ->add('success', 'Your application has been submitted. Thanks.');

                $data = $regApplicationForm->getData();

                // $file stores the uploaded PDF file
                /** @var UploadedFile $file */
                $file = $data->getUploadedImage();
                // Generate a unique name for the file before saving it
                $fileName = md5(uniqid()).'.'.$file->guessExtension();

                // Move the file to the directory where brochures are stored
                $imageDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/applications';
                $file->move($imageDir, $fileName);

                // Update the 'brochure' property to store the PDF file name
                // instead of its contents
                $data->setUploadedImage('/uploads/applications/'.$fileName);

                $this->getDoctrine()->getManager()->persist($data);
                $this->getDoctrine()->getManager()->flush();

                $this->resizeImage($data);

                $this->get('session')->getFlashBag()
                    ->add('success', 'Your application has been submitted. Thanks.');
            } else {
                $this->get('session')->getFlashBag()
                    ->add('error', 'Try again... there are some errors..');
            }
        }

        return $this->render('default/application.html.twig', array('form' => $regApplicationForm->createView()));
    }


    protected function resizeImage(Application $application)
    {

        $rootDir = $this->container
            ->getParameter('kernel.root_dir')
            .'/../web'
        ;

        $im = new \Imagick($rootDir  . $application->getUploadedImage());
        $imageprops = $im->getImageGeometry();
        $width = $imageprops['width'];
        $height = $imageprops['height'];
        if($width > $height) {
            $newHeight = 120;
            $newWidth = (120 / $height) * $width;
        } else {
            $newWidth = 120;
            $newHeight = (120 / $width) * $height;
        }

        $im->resizeImage($newWidth,$newHeight, \Imagick::FILTER_LANCZOS, 0.9, true);
        $im->cropImage (120,120,0,0);


        $imageDir = $rootDir . '/uploads/applications';

        $im->writeImage($imageDir . '/'.$application->getId().'.jpg');



    }
}
