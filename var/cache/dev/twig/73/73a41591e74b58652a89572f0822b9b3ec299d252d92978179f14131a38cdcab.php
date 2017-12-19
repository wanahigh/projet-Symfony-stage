<?php

/* base.html.twig */
class __TwigTemplate_83b5e9b24179292353fe88ba51f5993b124411c8d1e7b755b4a700156f836eec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'navbar' => array($this, 'block_navbar'),
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43d952e9fe660f39ff7b63aaf335ba7cec39f08c616bbb92e913daebaaf0a296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d952e9fe660f39ff7b63aaf335ba7cec39f08c616bbb92e913daebaaf0a296->enter($__internal_43d952e9fe660f39ff7b63aaf335ba7cec39f08c616bbb92e913daebaaf0a296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b7f63c85410dafc0c7b2f5ebb2cf76d8565cced5f53413b8ea85e8399be7eed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f63c85410dafc0c7b2f5ebb2cf76d8565cced5f53413b8ea85e8399be7eed7->enter($__internal_b7f63c85410dafc0c7b2f5ebb2cf76d8565cced5f53413b8ea85e8399be7eed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

    ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">

<!-- Latest compiled and minified JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
<!-- Fixed navbar -->
<div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <div class=\"small-logo-container\">
                <a class=\"small-logo\" href=\"#\">Myriapolis</a>
            </div>
        </div>
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    ";
        // line 41
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 42
            echo "                         ";
            // line 43
            echo "                        ";
            // line 44
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                    ";
        } else {
            // line 46
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                    ";
        }
        // line 47
        echo "</li>
                <li><a  href=\"/accueil\">Accueil</a></li>
                <li><a  href=\"\">Les Travaux</a></li>
                <li><a href=\"/cluster\">Les acteurs</a></li>
                <li><a href=\"\">L'actu</a></li>
                <li><a href=\"/contact\">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>


<div class=\"container-fluid big-logo-row\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 big-logo-container\">
                <h1 class=\"big-logo\"><img style=\"width:2em;padding-bottom:55px;\" src=\"http://alesmyriapolis.fr/wp-content/uploads/2016/06/cropped-cropped-Logo-2016-V3-1.png\" alt=\"\"></h1>
            </div><!--/.col-xs-12 -->
        </div><!--/.row -->
    </div><!--/.container -->
</div><!--/.container-fluid -->


";
        // line 71
        echo "



<style>/* *********************************
           Variables
  ********************************** */
    /* *********************************
       Some Style Overrides on Bootstrap
      ********************************** */
    .navbar-inverse {
        background: rgba(62, 195, 246, 0);
        border-bottom: none;
    }

    .navbar-inverse .navbar-toggle {
        border: 1px solid #333;
        border-color: rgba(255, 255, 255, 0.7);
    }

    .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
        border-color: transparent;
    }
    @media (max-width: 767px) {
        .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
            background: rgba(255, 255, 255, 0.75);
        }
    }

    .navbar-inverse .navbar-nav > li > a {
        color: black;
    }

    .navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus {
        color: #22F;
    }

    /* *********************************
               Toolbar Logo
      ********************************** */
    .small-logo-container {
        padding-top: 50px;
        height: 50px;
        overflow: hidden;
        position: absolute;
    }

    .small-logo {
        color: white;
        font-size: 2.5em;
        font-size: 2.5em;
        padding-bottom: -5px;
    }

    /* *********************************
               Big Logo
      ********************************** */
    .big-logo-row {
        background: gold;
    }
    .big-logo-row .big-logo-container {
        padding-top: 50px;
    }
    .big-logo-row h1 {
        font-size: 4em;
        margin: 0;
        padding: 0 0 15px 0;
    }
    @media (min-width: 400px) {
        .big-logo-row h1 {
            font-size: 4.5em;
        }
    }
    @media (min-width: 440px) {
        .big-logo-row h1 {
            font-size: 5.5em;
        }
    }
    @media (min-width: 500px) {
        .big-logo-row h1 {
            font-size: 6.5em;
        }
    }
    @media (min-width: 630px) {
        .big-logo-row h1 {
            font-size: 7.5em;
        }
    }
    @media (min-width: 768px) {
        .big-logo-row h1 {
            font-size: 9em;
            padding-bottom: 30px;
        }
    }
    @media (min-width: 1200px) {
        .big-logo-row h1 {
            font-size: 12em;
        }
    }

    @import url(http://fonts.googleapis.com/css?family=Roboto);
    /****** LOGIN ******/
    .login-container {
        padding: 30px;
        max-width: 350px;
        width: 100% !important;
        background-color: #F7F7F7;
        margin: 100px auto;
        border-radius: 2px;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        overflow: hidden;
        font-family: roboto;
    }
    .login-container h1 {
        text-align: center;
        font-size: 1.8em;
        font-family: roboto;
    }
    .login-container input[type=submit] {
        width: 100%;
        display: block;
        margin-bottom: 10px;
        position: relative;
    }
    .login-container input[type=text], input[type=password] {
        height: 44px;
        font-size: 16px;
        width: 100%;
        margin-bottom: 10px;
        -webkit-appearance: none;
        background: #fff;
        border: 1px solid #d9d9d9;
        border-top: 1px solid #c0c0c0;
        /* border-radius: 2px; */
        padding: 0 8px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .login-container input[type=text]:hover, input[type=password]:hover {
        border: 1px solid #b9b9b9;
        border-top: 1px solid #a0a0a0;
        -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
    }
    .login-submit {
        /* border: 1px solid #3079ed; */
        border: 0px;
        color: #fff;
        text-shadow: 0 1px rgba(0,0,0,0.1);
        background-color: #4d90fe;
        padding: 17px 0px;
        font-family: roboto;
        font-size: 14px;
        /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
    }
    .login-submit:hover {
        /* border: 1px solid #2f5bb7; */
        border: 0px;
        text-shadow: 0 1px rgba(0,0,0,0.3);
        background-color: #357ae8;
        /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
    }
    .login-container a {
        text-decoration: none;
        color: #666;
        font-weight: 400;
        text-align: center;
        display: inline-block;
        opacity: 0.6;
        transition: opacity ease 0.5s;
    }
    .login-help{
        font-size: 12px;
    }

    @import url(http://fonts.googleapis.com/css?family=Roboto);
    /****** LOGIN ******/
    .login-container {
        padding: 30px;
        max-width: 350px;
        width: 100% !important;
        background-color: #F7F7F7;
        margin: 100px auto;
        border-radius: 2px;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        overflow: hidden;
        font-family: roboto;
    }
    .login-container h1 {
        text-align: center;
        font-size: 1.8em;
        font-family: roboto;
    }
    .login-container input[type=submit] {
        width: 100%;
        display: block;
        margin-bottom: 10px;
        position: relative;
    }
    .login-container input[type=text], input[type=password] {
        height: 44px;
        font-size: 16px;
        width: 100%;
        margin-bottom: 10px;
        -webkit-appearance: none;
        background: #fff;
        border: 1px solid #d9d9d9;
        border-top: 1px solid #c0c0c0;
        /* border-radius: 2px; */
        padding: 0 8px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .login-container input[type=text]:hover, input[type=password]:hover {
        border: 1px solid #b9b9b9;
        border-top: 1px solid #a0a0a0;
        -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
    }
    .login-submit {
        /* border: 1px solid #3079ed; */
        border: 0px;
        color: #fff;
        text-shadow: 0 1px rgba(0,0,0,0.1);
        background-color: #4d90fe;
        padding: 17px 0px;
        font-family: roboto;
        font-size: 14px;
        /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
    }
    .login-submit:hover {
        /* border: 1px solid #2f5bb7; */
        border: 0px;
        text-shadow: 0 1px rgba(0,0,0,0.3);
        background-color: #357ae8;
        /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
    }
    .login-container a {
        text-decoration: none;
        color: #666;
        font-weight: 400;
        text-align: center;
        display: inline-block;
        opacity: 0.6;
        transition: opacity ease 0.5s;
    }
    .login-help{
        font-size: 12px;
    }
</style>


<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

<script>

    var navbarHeight = \$('.navbar').height();

    \$(window).scroll(function() {
        var navbarColor = \"62,195,246\";//color attr for rgba
        var smallLogoHeight = \$('.small-logo').height();
        var bigLogoHeight = \$('.big-logo').height();


        var smallLogoEndPos = 0;
        var smallSpeed = (smallLogoHeight / bigLogoHeight);

        var ySmall = (\$(window).scrollTop() * smallSpeed);

        var smallPadding = navbarHeight - ySmall;
        if (smallPadding > navbarHeight) { smallPadding = navbarHeight; }
        if (smallPadding < smallLogoEndPos) { smallPadding = smallLogoEndPos; }
        if (smallPadding < 0) { smallPadding = 0; }

        \$('.small-logo-container ').css({ \"padding-top\": smallPadding});

        var navOpacity = ySmall / smallLogoHeight;
        if  (navOpacity > 1) { navOpacity = 1; }
        if (navOpacity < 0 ) { navOpacity = 0; }
        var navBackColor = 'rgba(' + navbarColor + ',' + navOpacity + ')';
        \$('.navbar').css({\"background-color\": navBackColor});

        var shadowOpacity = navOpacity * 0.4;
        if ( ySmall > 1) {
            \$('.navbar').css({\"box-shadow\": \"0 2px 3px rgba(0,0,0,\" + shadowOpacity + \")\"});
        } else {
            \$('.navbar').css({\"box-shadow\": \"none\"});
        }



    });</script>


";
        // line 369
        $this->displayBlock('header', $context, $blocks);
        // line 370
        $this->displayBlock('navbar', $context, $blocks);
        // line 371
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 371, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 372
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 373
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
            ";
                // line 374
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 378
        $this->displayBlock('content', $context, $blocks);
        // line 379
        $this->displayBlock('body', $context, $blocks);
        // line 380
        $this->displayBlock('footer', $context, $blocks);
        // line 383
        echo "
";
        // line 384
        $this->displayBlock('javascripts', $context, $blocks);
        // line 385
        echo "



</body>
</html>";
        
        $__internal_43d952e9fe660f39ff7b63aaf335ba7cec39f08c616bbb92e913daebaaf0a296->leave($__internal_43d952e9fe660f39ff7b63aaf335ba7cec39f08c616bbb92e913daebaaf0a296_prof);

        
        $__internal_b7f63c85410dafc0c7b2f5ebb2cf76d8565cced5f53413b8ea85e8399be7eed7->leave($__internal_b7f63c85410dafc0c7b2f5ebb2cf76d8565cced5f53413b8ea85e8399be7eed7_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_563fa851dd572e83043d444a3ecc4519d7abae35cd5edf76f0ff8a2bf1ea636d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_563fa851dd572e83043d444a3ecc4519d7abae35cd5edf76f0ff8a2bf1ea636d->enter($__internal_563fa851dd572e83043d444a3ecc4519d7abae35cd5edf76f0ff8a2bf1ea636d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c1629b34da428632244fec30e4101ea5e5af64e5e056f0cee90a8ba20671f21e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1629b34da428632244fec30e4101ea5e5af64e5e056f0cee90a8ba20671f21e->enter($__internal_c1629b34da428632244fec30e4101ea5e5af64e5e056f0cee90a8ba20671f21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c1629b34da428632244fec30e4101ea5e5af64e5e056f0cee90a8ba20671f21e->leave($__internal_c1629b34da428632244fec30e4101ea5e5af64e5e056f0cee90a8ba20671f21e_prof);

        
        $__internal_563fa851dd572e83043d444a3ecc4519d7abae35cd5edf76f0ff8a2bf1ea636d->leave($__internal_563fa851dd572e83043d444a3ecc4519d7abae35cd5edf76f0ff8a2bf1ea636d_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_38826555a0367a478b3f5d1efed3f39bf8596bd3354053d02c1dec23b6970b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38826555a0367a478b3f5d1efed3f39bf8596bd3354053d02c1dec23b6970b4a->enter($__internal_38826555a0367a478b3f5d1efed3f39bf8596bd3354053d02c1dec23b6970b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_94135b02e9f645fa73920256e30dd96caaf42b282f557e976b2a7d41c296d6d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94135b02e9f645fa73920256e30dd96caaf42b282f557e976b2a7d41c296d6d7->enter($__internal_94135b02e9f645fa73920256e30dd96caaf42b282f557e976b2a7d41c296d6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_94135b02e9f645fa73920256e30dd96caaf42b282f557e976b2a7d41c296d6d7->leave($__internal_94135b02e9f645fa73920256e30dd96caaf42b282f557e976b2a7d41c296d6d7_prof);

        
        $__internal_38826555a0367a478b3f5d1efed3f39bf8596bd3354053d02c1dec23b6970b4a->leave($__internal_38826555a0367a478b3f5d1efed3f39bf8596bd3354053d02c1dec23b6970b4a_prof);

    }

    // line 369
    public function block_header($context, array $blocks = array())
    {
        $__internal_76b1db219df7c7c5beef58892e62c2cf97209bb11dccd0a8ba3ba7a6114aefb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b1db219df7c7c5beef58892e62c2cf97209bb11dccd0a8ba3ba7a6114aefb3->enter($__internal_76b1db219df7c7c5beef58892e62c2cf97209bb11dccd0a8ba3ba7a6114aefb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_a4498384f327eb76c6b186837c7e34ee6d2ec53a442d9dea1e04458e7d73d599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4498384f327eb76c6b186837c7e34ee6d2ec53a442d9dea1e04458e7d73d599->enter($__internal_a4498384f327eb76c6b186837c7e34ee6d2ec53a442d9dea1e04458e7d73d599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_a4498384f327eb76c6b186837c7e34ee6d2ec53a442d9dea1e04458e7d73d599->leave($__internal_a4498384f327eb76c6b186837c7e34ee6d2ec53a442d9dea1e04458e7d73d599_prof);

        
        $__internal_76b1db219df7c7c5beef58892e62c2cf97209bb11dccd0a8ba3ba7a6114aefb3->leave($__internal_76b1db219df7c7c5beef58892e62c2cf97209bb11dccd0a8ba3ba7a6114aefb3_prof);

    }

    // line 370
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_bbb194d8387b454ae803dde157cab2552963618e2cfe866b5a66c8a87d843525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbb194d8387b454ae803dde157cab2552963618e2cfe866b5a66c8a87d843525->enter($__internal_bbb194d8387b454ae803dde157cab2552963618e2cfe866b5a66c8a87d843525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_59795f6c73f0f8df891b3ab0d01c65b5bc3f5ebaec42fff8a401b3c7ff933043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59795f6c73f0f8df891b3ab0d01c65b5bc3f5ebaec42fff8a401b3c7ff933043->enter($__internal_59795f6c73f0f8df891b3ab0d01c65b5bc3f5ebaec42fff8a401b3c7ff933043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_59795f6c73f0f8df891b3ab0d01c65b5bc3f5ebaec42fff8a401b3c7ff933043->leave($__internal_59795f6c73f0f8df891b3ab0d01c65b5bc3f5ebaec42fff8a401b3c7ff933043_prof);

        
        $__internal_bbb194d8387b454ae803dde157cab2552963618e2cfe866b5a66c8a87d843525->leave($__internal_bbb194d8387b454ae803dde157cab2552963618e2cfe866b5a66c8a87d843525_prof);

    }

    // line 378
    public function block_content($context, array $blocks = array())
    {
        $__internal_df8dc2fffb8107d2b07df4f86e071c57da804096a1fa4e685bf7244b3c4fbfb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df8dc2fffb8107d2b07df4f86e071c57da804096a1fa4e685bf7244b3c4fbfb6->enter($__internal_df8dc2fffb8107d2b07df4f86e071c57da804096a1fa4e685bf7244b3c4fbfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_575d213f6929616e76b4135ed75832a8f0fe728ba3e1f076899bea18b17598d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575d213f6929616e76b4135ed75832a8f0fe728ba3e1f076899bea18b17598d2->enter($__internal_575d213f6929616e76b4135ed75832a8f0fe728ba3e1f076899bea18b17598d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_575d213f6929616e76b4135ed75832a8f0fe728ba3e1f076899bea18b17598d2->leave($__internal_575d213f6929616e76b4135ed75832a8f0fe728ba3e1f076899bea18b17598d2_prof);

        
        $__internal_df8dc2fffb8107d2b07df4f86e071c57da804096a1fa4e685bf7244b3c4fbfb6->leave($__internal_df8dc2fffb8107d2b07df4f86e071c57da804096a1fa4e685bf7244b3c4fbfb6_prof);

    }

    // line 379
    public function block_body($context, array $blocks = array())
    {
        $__internal_441f116bfa8d14b1131ff48fc824753684d04937fcc06ae874c85c8cb888ee4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_441f116bfa8d14b1131ff48fc824753684d04937fcc06ae874c85c8cb888ee4b->enter($__internal_441f116bfa8d14b1131ff48fc824753684d04937fcc06ae874c85c8cb888ee4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d84c2a81997b899be2a5ef88161037e27a68e8916a881f1396c9c62a311d25e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84c2a81997b899be2a5ef88161037e27a68e8916a881f1396c9c62a311d25e3->enter($__internal_d84c2a81997b899be2a5ef88161037e27a68e8916a881f1396c9c62a311d25e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d84c2a81997b899be2a5ef88161037e27a68e8916a881f1396c9c62a311d25e3->leave($__internal_d84c2a81997b899be2a5ef88161037e27a68e8916a881f1396c9c62a311d25e3_prof);

        
        $__internal_441f116bfa8d14b1131ff48fc824753684d04937fcc06ae874c85c8cb888ee4b->leave($__internal_441f116bfa8d14b1131ff48fc824753684d04937fcc06ae874c85c8cb888ee4b_prof);

    }

    // line 380
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3672b3c7077e8f38f66fbda055dcffdfff7866f2dadafd2b6e8f93a1a5bf59a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3672b3c7077e8f38f66fbda055dcffdfff7866f2dadafd2b6e8f93a1a5bf59a9->enter($__internal_3672b3c7077e8f38f66fbda055dcffdfff7866f2dadafd2b6e8f93a1a5bf59a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_b518e9fa58ad69f783a792a66c366d51a4de2478e00c8e94b1ba9f5d23ee7b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b518e9fa58ad69f783a792a66c366d51a4de2478e00c8e94b1ba9f5d23ee7b0a->enter($__internal_b518e9fa58ad69f783a792a66c366d51a4de2478e00c8e94b1ba9f5d23ee7b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " <nav class=\"navbar fixed-bottom navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"/\">Myriapolis</a>
</nav>";
        
        $__internal_b518e9fa58ad69f783a792a66c366d51a4de2478e00c8e94b1ba9f5d23ee7b0a->leave($__internal_b518e9fa58ad69f783a792a66c366d51a4de2478e00c8e94b1ba9f5d23ee7b0a_prof);

        
        $__internal_3672b3c7077e8f38f66fbda055dcffdfff7866f2dadafd2b6e8f93a1a5bf59a9->leave($__internal_3672b3c7077e8f38f66fbda055dcffdfff7866f2dadafd2b6e8f93a1a5bf59a9_prof);

    }

    // line 384
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_386ebcca58d12e27f4abe9303601468ed4ec29b235e403f9c9df59e0c3bb990d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_386ebcca58d12e27f4abe9303601468ed4ec29b235e403f9c9df59e0c3bb990d->enter($__internal_386ebcca58d12e27f4abe9303601468ed4ec29b235e403f9c9df59e0c3bb990d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_44759e08a9d9b695a310b68e275f2c186f1ceaeca6a18c5c1f6d17caa40a6db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44759e08a9d9b695a310b68e275f2c186f1ceaeca6a18c5c1f6d17caa40a6db1->enter($__internal_44759e08a9d9b695a310b68e275f2c186f1ceaeca6a18c5c1f6d17caa40a6db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_44759e08a9d9b695a310b68e275f2c186f1ceaeca6a18c5c1f6d17caa40a6db1->leave($__internal_44759e08a9d9b695a310b68e275f2c186f1ceaeca6a18c5c1f6d17caa40a6db1_prof);

        
        $__internal_386ebcca58d12e27f4abe9303601468ed4ec29b235e403f9c9df59e0c3bb990d->leave($__internal_386ebcca58d12e27f4abe9303601468ed4ec29b235e403f9c9df59e0c3bb990d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  605 => 384,  585 => 380,  568 => 379,  551 => 378,  534 => 370,  517 => 369,  500 => 11,  483 => 9,  468 => 385,  466 => 384,  463 => 383,  461 => 380,  459 => 379,  457 => 378,  444 => 374,  439 => 373,  434 => 372,  430 => 371,  428 => 370,  426 => 369,  126 => 71,  101 => 47,  95 => 46,  89 => 44,  87 => 43,  85 => 42,  83 => 41,  50 => 12,  48 => 11,  43 => 9,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

    {% block title %}{% endblock %}</title>

    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">

<!-- Latest compiled and minified JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
<!-- Fixed navbar -->
<div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <div class=\"small-logo-container\">
                <a class=\"small-logo\" href=\"#\">Myriapolis</a>
            </div>
        </div>
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                         {#{{ app.user.username }}#}
                        {##}
                        <a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
                    {% else %}
                        <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                    {% endif %}</li>
                <li><a  href=\"/accueil\">Accueil</a></li>
                <li><a  href=\"\">Les Travaux</a></li>
                <li><a href=\"/cluster\">Les acteurs</a></li>
                <li><a href=\"\">L'actu</a></li>
                <li><a href=\"/contact\">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>


<div class=\"container-fluid big-logo-row\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 big-logo-container\">
                <h1 class=\"big-logo\"><img style=\"width:2em;padding-bottom:55px;\" src=\"http://alesmyriapolis.fr/wp-content/uploads/2016/06/cropped-cropped-Logo-2016-V3-1.png\" alt=\"\"></h1>
            </div><!--/.col-xs-12 -->
        </div><!--/.row -->
    </div><!--/.container -->
</div><!--/.container-fluid -->


{#Footer#}




<style>/* *********************************
           Variables
  ********************************** */
    /* *********************************
       Some Style Overrides on Bootstrap
      ********************************** */
    .navbar-inverse {
        background: rgba(62, 195, 246, 0);
        border-bottom: none;
    }

    .navbar-inverse .navbar-toggle {
        border: 1px solid #333;
        border-color: rgba(255, 255, 255, 0.7);
    }

    .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
        border-color: transparent;
    }
    @media (max-width: 767px) {
        .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
            background: rgba(255, 255, 255, 0.75);
        }
    }

    .navbar-inverse .navbar-nav > li > a {
        color: black;
    }

    .navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus {
        color: #22F;
    }

    /* *********************************
               Toolbar Logo
      ********************************** */
    .small-logo-container {
        padding-top: 50px;
        height: 50px;
        overflow: hidden;
        position: absolute;
    }

    .small-logo {
        color: white;
        font-size: 2.5em;
        font-size: 2.5em;
        padding-bottom: -5px;
    }

    /* *********************************
               Big Logo
      ********************************** */
    .big-logo-row {
        background: gold;
    }
    .big-logo-row .big-logo-container {
        padding-top: 50px;
    }
    .big-logo-row h1 {
        font-size: 4em;
        margin: 0;
        padding: 0 0 15px 0;
    }
    @media (min-width: 400px) {
        .big-logo-row h1 {
            font-size: 4.5em;
        }
    }
    @media (min-width: 440px) {
        .big-logo-row h1 {
            font-size: 5.5em;
        }
    }
    @media (min-width: 500px) {
        .big-logo-row h1 {
            font-size: 6.5em;
        }
    }
    @media (min-width: 630px) {
        .big-logo-row h1 {
            font-size: 7.5em;
        }
    }
    @media (min-width: 768px) {
        .big-logo-row h1 {
            font-size: 9em;
            padding-bottom: 30px;
        }
    }
    @media (min-width: 1200px) {
        .big-logo-row h1 {
            font-size: 12em;
        }
    }

    @import url(http://fonts.googleapis.com/css?family=Roboto);
    /****** LOGIN ******/
    .login-container {
        padding: 30px;
        max-width: 350px;
        width: 100% !important;
        background-color: #F7F7F7;
        margin: 100px auto;
        border-radius: 2px;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        overflow: hidden;
        font-family: roboto;
    }
    .login-container h1 {
        text-align: center;
        font-size: 1.8em;
        font-family: roboto;
    }
    .login-container input[type=submit] {
        width: 100%;
        display: block;
        margin-bottom: 10px;
        position: relative;
    }
    .login-container input[type=text], input[type=password] {
        height: 44px;
        font-size: 16px;
        width: 100%;
        margin-bottom: 10px;
        -webkit-appearance: none;
        background: #fff;
        border: 1px solid #d9d9d9;
        border-top: 1px solid #c0c0c0;
        /* border-radius: 2px; */
        padding: 0 8px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .login-container input[type=text]:hover, input[type=password]:hover {
        border: 1px solid #b9b9b9;
        border-top: 1px solid #a0a0a0;
        -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
    }
    .login-submit {
        /* border: 1px solid #3079ed; */
        border: 0px;
        color: #fff;
        text-shadow: 0 1px rgba(0,0,0,0.1);
        background-color: #4d90fe;
        padding: 17px 0px;
        font-family: roboto;
        font-size: 14px;
        /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
    }
    .login-submit:hover {
        /* border: 1px solid #2f5bb7; */
        border: 0px;
        text-shadow: 0 1px rgba(0,0,0,0.3);
        background-color: #357ae8;
        /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
    }
    .login-container a {
        text-decoration: none;
        color: #666;
        font-weight: 400;
        text-align: center;
        display: inline-block;
        opacity: 0.6;
        transition: opacity ease 0.5s;
    }
    .login-help{
        font-size: 12px;
    }

    @import url(http://fonts.googleapis.com/css?family=Roboto);
    /****** LOGIN ******/
    .login-container {
        padding: 30px;
        max-width: 350px;
        width: 100% !important;
        background-color: #F7F7F7;
        margin: 100px auto;
        border-radius: 2px;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        overflow: hidden;
        font-family: roboto;
    }
    .login-container h1 {
        text-align: center;
        font-size: 1.8em;
        font-family: roboto;
    }
    .login-container input[type=submit] {
        width: 100%;
        display: block;
        margin-bottom: 10px;
        position: relative;
    }
    .login-container input[type=text], input[type=password] {
        height: 44px;
        font-size: 16px;
        width: 100%;
        margin-bottom: 10px;
        -webkit-appearance: none;
        background: #fff;
        border: 1px solid #d9d9d9;
        border-top: 1px solid #c0c0c0;
        /* border-radius: 2px; */
        padding: 0 8px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .login-container input[type=text]:hover, input[type=password]:hover {
        border: 1px solid #b9b9b9;
        border-top: 1px solid #a0a0a0;
        -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
    }
    .login-submit {
        /* border: 1px solid #3079ed; */
        border: 0px;
        color: #fff;
        text-shadow: 0 1px rgba(0,0,0,0.1);
        background-color: #4d90fe;
        padding: 17px 0px;
        font-family: roboto;
        font-size: 14px;
        /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
    }
    .login-submit:hover {
        /* border: 1px solid #2f5bb7; */
        border: 0px;
        text-shadow: 0 1px rgba(0,0,0,0.3);
        background-color: #357ae8;
        /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
    }
    .login-container a {
        text-decoration: none;
        color: #666;
        font-weight: 400;
        text-align: center;
        display: inline-block;
        opacity: 0.6;
        transition: opacity ease 0.5s;
    }
    .login-help{
        font-size: 12px;
    }
</style>


<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

<script>

    var navbarHeight = \$('.navbar').height();

    \$(window).scroll(function() {
        var navbarColor = \"62,195,246\";//color attr for rgba
        var smallLogoHeight = \$('.small-logo').height();
        var bigLogoHeight = \$('.big-logo').height();


        var smallLogoEndPos = 0;
        var smallSpeed = (smallLogoHeight / bigLogoHeight);

        var ySmall = (\$(window).scrollTop() * smallSpeed);

        var smallPadding = navbarHeight - ySmall;
        if (smallPadding > navbarHeight) { smallPadding = navbarHeight; }
        if (smallPadding < smallLogoEndPos) { smallPadding = smallLogoEndPos; }
        if (smallPadding < 0) { smallPadding = 0; }

        \$('.small-logo-container ').css({ \"padding-top\": smallPadding});

        var navOpacity = ySmall / smallLogoHeight;
        if  (navOpacity > 1) { navOpacity = 1; }
        if (navOpacity < 0 ) { navOpacity = 0; }
        var navBackColor = 'rgba(' + navbarColor + ',' + navOpacity + ')';
        \$('.navbar').css({\"background-color\": navBackColor});

        var shadowOpacity = navOpacity * 0.4;
        if ( ySmall > 1) {
            \$('.navbar').css({\"box-shadow\": \"0 2px 3px rgba(0,0,0,\" + shadowOpacity + \")\"});
        } else {
            \$('.navbar').css({\"box-shadow\": \"none\"});
        }



    });</script>


{% block header %}{% endblock %}
{% block navbar %}{% endblock %}
{% for type, messages in app.session.flashBag.all %}
    {% for message in messages %}
        <div class=\"{{ type }}\">
            {{ message|trans({}, 'FOSUserBundle') }}
        </div>
    {% endfor %}
{% endfor %}
{% block content %}{% endblock %}
{% block body %}{% endblock %}
{% block footer%} <nav class=\"navbar fixed-bottom navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"/\">Myriapolis</a>
</nav>{% endblock %}

{% block javascripts %}{% endblock %}




</body>
</html>", "base.html.twig", "/var/www/html/Projet-Symfony-master/app/Resources/views/base.html.twig");
    }
}
