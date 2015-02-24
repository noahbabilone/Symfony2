<?php

/* ::layout.html.twig */
class __TwigTemplate_88f8ae86eaa8502f6f5926b3b47cf2c221408a990dc54fcee9ef1a72c8637236 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body>

 <div class=\"container\">
  \t<div class=\"row\">&nbsp;</div>
\t
<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\">Ma boutique</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
\t    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t      <ul class=\"nav navbar-nav\">
\t        <li class=\"active\"><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\">Accueil <span class=\"sr-only\">(current)</span></a></li>
\t        <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\">Annonces</a></li>
\t        <li class=\"dropdown\">
\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Catégorie <span class=\"caret\"></span></a>
\t          <ul class=\"dropdown-menu\" role=\"menu\">
\t            <li><a href=\"#\">Action</a></li>
\t            <li><a href=\"#\">Another action</a></li>
\t            <li><a href=\"#\">Something else here</a></li>
\t            <li class=\"divider\"></li>
\t            <li><a href=\"#\">Separated link</a></li>
\t            <li class=\"divider\"></li>
\t            <li><a href=\"#\">One more separated link</a></li>
\t          </ul>
\t        </li>
\t      </ul>
\t      <form class=\"navbar-form navbar-right\" role=\"search\">
\t        <div class=\"form-group\">
\t          <input type=\"text\" class=\"form-control\" placeholder=\"Saisissez votre recherche \">
\t        </div>
\t        <button type=\"submit\" class=\"btn btn-default\">Ok</button>
\t      </form>
\t      <ul class=\"nav navbar-nav navbar-right\">
\t        <li><a href=\"#\">Connexion</a></li>
\t        <li><a href=\"#\">Inscription</a></li>
\t        <li><a href=\"#\">Mon panier(0)</a></li>
\t      </ul>
\t    </div><!-- /.navbar-collapse -->
\t  </div><!-- /.container-fluid -->
\t</nav>
\t
\t
\t    
 
    <div id=\"\" >
    \t<div class=\"jumbotron\">
\t      <h1>Ma plateforme d'annonces</h1>
\t      <p>
\t        Ce projet est propulsé par Symfony2,
\t        et construit grâce au MOOC OpenClassrooms et SensioLabs.
\t      </p>
\t      <p>
\t        <a class=\"btn btn-primary btn-lg\" href=\"http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2\">
\t          Participer au MOOC »
\t        </a>
\t      </p>
    \t</div>
    </div>
    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 94
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 99
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 105
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 109
        $this->displayBlock('javascripts', $context, $blocks);
        // line 114
        echo "
</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "OC Plateforme";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
    }

    // line 97
    public function block_body($context, array $blocks = array())
    {
        // line 98
        echo "        ";
    }

    // line 109
    public function block_javascripts($context, array $blocks = array())
    {
        // line 110
        echo "    ";
        // line 111
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 111,  192 => 110,  189 => 109,  185 => 98,  182 => 97,  177 => 13,  175 => 12,  172 => 11,  166 => 9,  160 => 114,  158 => 109,  151 => 105,  143 => 99,  141 => 97,  135 => 94,  128 => 90,  124 => 89,  71 => 39,  67 => 38,  58 => 32,  39 => 15,  37 => 11,  32 => 9,  23 => 2,);
    }
}
