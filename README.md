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



<!--=====================================
=            agregar campos          =
======================================-->

para agregar objetos los tuve que agregar del Resources/config/doctrine-->
src\ProbandoBundle\Resources\config\doctrine
Minucipalidad.orm.xml

 <field name="cargo2" type="string" column="cargo2" length="255" nullable="false">
      <options>
        <option name="fixed"/>
      </options>
    </field>

y luego de ahi mapaer 

esto da los getter y setter !!! ya que si hago una variable en la entidad no da bola
si existe los orm !! quizas abria que borrar y generarlas nuevamente

php bin/console doctrine:generate:entities ProbandoBundle/Entity
<!--====  End of Section comment  ====-->

/*=============================================
=                   =
=============================================*/

algunos comentarios :
si en tenes o agregaste campos nuevo tanto en el orm y en la entidades
y tiras :php bin/cnsole doctrine:mapping:info

C:\xampp\htdocs\borrar3_chiappegus\cookies\symfony-installer\probando>php bin/c
nsole doctrine:mapping:info
Found 2 mapped entities:
[OK]   ProbandoBundle\Entity\Municipalidad
[OK]   ProbandoBundle\Entity\Vemos

No detecta la diferencia

Pero si :: php bin/console doctrine:schema:validate
C:\xampp\htdocs\borrar3_chiappegus\cookies\symfony-installer\probando>php bin/co
nsole doctrine:schema:validate
[Mapping]  OK - The mapping files are correct.
[Database] FAIL - The database schema is not in sync with the current mapping fi
le.


depues de agregar el campo : hacemos un :: php bin/console doctrine:schema:update --force

Updating database schema...
Database schema updated successfully! "1" query was executed

y ahora ::php bin/console doctrine:schema:validate 

C:\xampp\htdocs\borrar3_chiappegus\cookies\symfony-installer\probando>php bin/co
nsole doctrine:schema:validate
[Mapping]  OK - The mapping files are correct.
[Database] OK - The database schema is in sync with the mapping files.



/*=====  End of Section comment block  ======*/






/*=============================================
=         Borrando y regenerando los ORM 
             / agregar campo de las entidades  
                agregar campo de las entidades           =
=============================================*/

como ahora ya el vemos , si bien tiene form , que lo voy a eliminar 

vamos a ver como completa con el crud !!
y si lo completa borrando 
 ProbandoBundle\Form\vemosType!!!

 lo borrarmos ya que quiero que me hago con el nuevo campo que es : cargo2!!!

ya que el viejo es  :

$builder->add('nombre')
            ->add('apellido')
            ->add('tel')
            ->add('cargo');
Borramos el form 
lanzamos el comando :
haber si me tira el error el crud , ya que no va a encontrar el FORM

espectacular me hizo todo , lo que no pude es ver el tema de las rutas que no me tita bien el view , que las hace en la app

php bin/console generate:doctrine:crud

buscamos la entidad que piden :
ProbandoBundle:Vemos
ProbandoBundle\Resources\views\Vemos

ProbandoBundle\Resources\views\municipalidad





C:\xampp\htdocs\borrar3_chiappegus\cookies\symfony-installer\probando>php bin/co
nsole generate:doctrine:crud


  Welcome to the Doctrine2 CRUD generator



This command helps you generate CRUD controllers and templates.

First, give the name of the existing entity for which you want to generate a CRU
D
(use the shortcut notation like AcmeBlogBundle:Post)

The Entity shortcut name: ProbandoBundle:Vemos

By default, the generator creates two actions: list and show.
You can also ask it to generate "write" actions: new, update, and delete.

Do you want to generate the "write" actions [no]? yes

Determine the format to use for the generated CRUD.

Configuration format (yml, xml, php, or annotation) [annotation]: yml

Determine the routes prefix (all the routes will be "mounted" under this
prefix: /prefix/, /prefix/new, ...).

Routes prefix [/vemos]: ProbandoBundle/Resources/views/


  Summary before generation


You are going to generate a CRUD controller for "ProbandoBundle:Vemos"
using the "yml" format.

Do you confirm generation [yes]?


  CRUD generation


  created .\src\ProbandoBundle/Controller//VemosController.php
  updated .\app/Resources/views/vemos/index.html.twig
  updated .\app/Resources/views/vemos/show.html.twig
  updated .\app/Resources/views/vemos/new.html.twig
  updated .\app/Resources/views/vemos/edit.html.twig
  updated .\src\ProbandoBundle/Tests/Controller//VemosControllerTest.php
  created .\src\ProbandoBundle/Resources/config/routing/vemos.yml
Generating the CRUD code: OK
  created .\src\ProbandoBundle/Form/VemosType.php
Generating the Form code: OK
Updating the routing: Confirm automatic update of the Routing [yes]?
Importing the CRUD routes:   updated .\src\ProbandoBundle/Resources/config/routi
ng.yml


[ERROR] The bundle's "Resources/config/routing.yml" file cannot be imported
from "app/config/routing.yml" because the "ProbandoBundle" bundle is
already imported. Make sure you are not using two different
configuration/routing formats in the same bundle because it won't work.
OK


  Everything is OK! Now get to work :).





ProbandoBundle\Resources\views\municipalidad


/*=====  End of Section comment block  ======*/


/*=============================================
=         Borrando y regenerando los ORM 
             / agregar campo de las entidades  
                agregar campo de las entidades           =
=============================================*/


se borro la orm vemos


C:\xampp\htdocs\borrar3_chiappegus\cookies\symfony-installer\probando>php bin/co
nsole doctrine:mapping:import ProbandoBundle
Importing mapping information from "default" entity manager
  > writing C:\xampp\htdocs\borrar3_chiappegus\cookies\symfony-installer\proband
o\src\ProbandoBundle/Resources/config/doctrine/Municipalidad.orm.xml
  > writing C:\xampp\htdocs\borrar3_chiappegus\cookies\symfony-installer\proband
o\src\ProbandoBundle/Resources/config/doctrine/Vemos.orm.xml

excelente con->  php bin/console doctrine:mapping:import ProbandoBundle

se regeneran

ahora se borra nuevamente!! y en la entity vamos a generar un campo nuevo
vamos a ver si lo toma!!
pero antes vamos a generar los getter y veri si funciona!!


php bin/console doctrine:generate:entities ProbandoBundle/Entity

borramos el  Vemos.orm.xml

borramos lo getter y setter. del entity Vemos.php


/*/*/ grabe si no esta el orm no se puede generar el entidad ya que la llama a ella!!

entonces (No funciona)
1 borramos los getter y setter de la entity
2 generamo el orm , vemos si incoporo los cambios  php bin/console doctrine:mapping:import ProbandoBundle 
3 vemos si se generan lo getter y setter php bin/console doctrine:generate:entities ProbandoBundle/Entity


(el 2 no funciona) ya que toma los datos de la base de datos!!
entonces deberiamos hacer los siguiente :
1 borramos el orm , borramos lo getter y setter generamos los campos ,
2 updateamos a la base!! 
php bin/console doctrine:schema:update --force
3 generamos el orm
4 le damos a la entities

lo que funciona!!
se deben borrar los orm!! todos!!
y poner bien el la entidad la anotacion orm

ejemplo :
    /**
     * @var string
     * @ORM\Column(name="cargo2", type="string", length=255, nullable=false)
     */
    private $cargo2;

luego se generan los getter y setter con : 

php bin/console doctrine:generate:entities ProbandoBundle/Entity 

(ojo siguen borrado lo ORM , si quiero los genero nuevamente con :

php bin/console doctrine:mapping:import ProbandoBundle 

pero mi idea es no ponerlo con eso , sino ahora ver si escribe directamente en la basedatos
ya no esta los ORM 




)   

vamos :
php bin/console doctrine:schema:update --force


C:\xampp\htdocs\borrar3_chiappegus\cookies\symfony-installer\probando>php bin/co
nsole doctrine:schema:update --force
Updating database schema...
Database schema updated successfully! "1" query was executed

excelente !!!
impacto en la base de datos!!

ahora genero los ORM  con :


php bin/console doctrine:mapping:import ProbandoBundle

LISTO!!!!
:) :) :) :) :) :) :) :) :) :) :) :) :) :) :) :) :) 