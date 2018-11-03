<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Usuario;
use AppBundle\Form\UsuarioType;
use AppBundle\Entity\Lugar;
use AppBundle\Form\LugarType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function loginAction(Request $request)
    {
        return $this->render('adrian/loginBlock.html.twig');
    }


  /**
  * @Route("/prueba/", name="prueba")
  */
 public function pruebaAction(Request $request)
 {
   return $this->render('adrian/prueba.html.twig');

}

/**
* @Route("/register/", name="register")
*/
public function registerAction(Request $request)
{
 return $this->render('adrian/registerBlock.html.twig');

}

/**
* @Route("/lugares/", name="lugares")
*/
public function lugaresAction()
{

  $repository = $this->getDoctrine()->getRepository('AppBundle:Lugar');
  $values = $repository->findAll();
  return $this->render('Lugares/all.html.twig', array("lugares"=>$values));

}

/**
* @Route("/usuarios/", name="usuarios")
*/
public function usuariosAction()
{

  $repository = $this->getDoctrine()->getRepository('AppBundle:Usuario');
  $values = $repository->findAll();
  return $this->render('Usuarios/all.html.twig', array("usuarios"=>$values));

}

/**
* @Route("/usuarioNuevo/", name="usuarioNuevo")
*/
public function usuarioNuevoAction(Request $request)
{
  $usuario = new Usuario();
  $form = $this->createForm(UsuarioType::class, $usuario);
  $form->handleRequest($request);

 if ($form->isSubmitted() && $form->isValid()) {
   $usuario = $form->getData();
   //var_dump($usuario);

   $entityManager = $this->getDoctrine()->getManager();
   $entityManager->persist($usuario);
   $entityManager->flush();
   //return $this->redirectToRoute('usuarios', array('id'->$usuario->getId()));
   return $this->redirectToRoute('usuarios');


 }

  return $this->render('Usuarios/nuevoUsuario.html.twig', array(
            'form' => $form->createView(),));


}


/**
* @Route("/lugarNuevo/", name="lugarNuevo")
*/
public function lugarNuevoAction(Request $request)
{
  $lugar = new Lugar();
  $form = $this->createForm(LugarType::class, $lugar);
  $form->handleRequest($request);

 if ($form->isSubmitted() && $form->isValid()) {
   $lugar = $form->getData();
   //var_dump($lugar);

   $entityManager = $this->getDoctrine()->getManager();
   $entityManager->persist($lugar);
   $entityManager->flush();
   //return $this->redirectToRoute('usuarios', array('id'->$usuario->getId()));
   return $this->redirectToRoute('lugares');


 }

  return $this->render('Lugares/nuevoLugar.html.twig', array(
            'form' => $form->createView(),));


}


/**
* @Route("/usuarios/{id}", name="usuario")
*/
public function buscarUsuarioAction($id)
{

  $repository = $this->getDoctrine()->getRepository('AppBundle:Usuario');
  $usuario = $repository ->find($id);
  if(!$usuario){
     return $this->render('adrian/error.html.twig', array("id_noEncontrado"=> $id));
  }else{
    return $this->render('Usuarios/usuario.html.twig', array("id"=>$usuario->getId(),
    "nombreUsuario"=>$usuario->getNombreUsuario(),"nombreUser"=>$usuario->getNombreUser(),
    "apellidosUser"=>$usuario->getApellidosUser(),"sexoUser"=>$usuario->getSexoUser(),
    "fechaNacimientoUser"=>$usuario->getFechaNacimientoUser()));
}
}



/**
* @Route("/lugares/{id}", name="lugar")
*/
public function buscarLugarAction($id)
{

  $repository = $this->getDoctrine()->getRepository('AppBundle:Lugar');
  $lugar = $repository ->find($id);

  if(!$lugar){
     return $this->render('adrian/error.html.twig', array("id_noEncontrado"=> $id));
  }else{

  return $this->render('Lugares/lugar.html.twig', array("id"=>$lugar->getId(),
    "nombreLugar"=>$lugar->getNombreLugar(),"descripcionLugar"=>$lugar->getDescripcionLugar(),
    "ubicacionLugar"=>$lugar->getUbicacionLugar(),"categoriaLugar"=>$lugar->getCategoriaLugar(),
    "notaMediaLugar"=>$lugar->getNotaMediaLugar()));
  }

}

}
