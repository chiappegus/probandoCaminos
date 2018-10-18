probando
========

A Symfony project created on October 17, 2018, 5:42 pm.

https://symfony.com/doc/3.4/doctrine.html


C:\xampp\htdocs\borrar3_chiappegus\cookies\symfony-installer\probando> php bin/c
onsole doctrine:schema:update --force


https://symfony.com/doc/current/doctrine.html

https://symfony.com/doc/2.0/book/doctrine.html

https://symfony.com/doc/current/forms.html

https://symfony.com/doc/current/doctrine/registration_form.html

https://symfony.com/doc/current/reference/forms/types.html

https://symfony.com/doc/3.4/doctrine/associations.html



Your requirements could not be resolved to an installable set of packages.

  Problem 1
    - The requested package sensio/framework-extra-bundle (locked at v5.2.1, req
uired as ^3.0.2) is satisfiable by sensio/framework-extra-bundle[v5.2.1] but the
se conflict with your requirements or minimum-stability.
  Problem 2
    - The requested package symfony/monolog-bundle (locked at v3.3.0, required a
s ^2.8) is satisfiable by symfony/monolog-bundle[v3.3.0] but these conflict with
 your requirements or minimum-stability.
  Problem 3
    - The requested package symfony/symfony (locked at v3.4.17, required as 3.1.
*) is satisfiable by symfony/symfony[v3.4.17] but these conflict with your requi
rements or minimum-stability.
  Problem 4
  
ymfony[v3.1.0, v3.1.1, v3.1.10, v3.1.2, v3.1.3, v3.1.4, v3.1.5, v3.1.6, v3.1.7,
v3.1.8, v3.1.9].


Installation failed, reverting ./composer.json to its original content.

C:\xampp\htdocs\borrar3_chiappegus\cookies\symfony-installer\probando>

https://symfony.com/doc/current/doctrine.html



https://symfony.com/doc/current/doctrine/reverse_engineering.html
Para pasar de base de datos a entity :)


php bin/console doctrine:mapping:import 'ProbandoBundle\Entity' annotation --path=src/ProbandoBundle/Entity


// generates getter/setter methods
 php bin/console make:entity --regenerate ProbandoBundle
https://symfony.com/doc/2.0/book/doctrine.html#generating-getters-and-setters
 $ php app/console doctrine:generate:entities Acme/StoreBundle/Entity/Product

 php bin/console doctrine:generate:entities ProbandoBundle/Entity


algo hermoso que es el crud!!!

php bin/console  generate:doctrine:crud ProbandoBundle:Municipalidad


/* 
se hicieron correcciones -> ya que el crud no le gusta la entidades en minusculas.
luego por que es la version de symfony el 3.4 hay que poner en el render :

return $this->render('@Probando/municipalidad/edit.html.twig', array(
            'municipalidad' => $municipalidad,
            'edit_form'     => $editForm->createView(),
            'delete_form'   => $deleteForm->createView(),
        ));


/* */

/* para redondear :*/*/

para entrar en tema primero se generan las entidades.
doctrine:generate:entity



luego se pueden mapear.

doctrine:mapping:convert


y luego se sube

php bin/console doctrine:schema:update --force

se hacen los form :
generate:doctrine:form



Se hace un crud

generate:doctrine:crud






