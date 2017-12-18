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
        $__internal_89cb8b5fb9a4a4d5eeb6c167071bd642874b7baa0cae1f711d21a426ca197b18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89cb8b5fb9a4a4d5eeb6c167071bd642874b7baa0cae1f711d21a426ca197b18->enter($__internal_89cb8b5fb9a4a4d5eeb6c167071bd642874b7baa0cae1f711d21a426ca197b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6d2a575cf8e109d5b9fd3d85ebef60b163cdb271381ec1d4a34022e2584e456c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2a575cf8e109d5b9fd3d85ebef60b163cdb271381ec1d4a34022e2584e456c->enter($__internal_6d2a575cf8e109d5b9fd3d85ebef60b163cdb271381ec1d4a34022e2584e456c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            echo "
                         ";
            // line 44
            echo "                        ";
            // line 45
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>

                    ";
        } else {
            // line 48
            echo "
                        <a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>

                    ";
        }
        // line 51
        echo "</li>
                <li><a  href=\"/profile\">Mon Profil</a></li>
                <li class=\"active\"><a href=\"\">register</a></li>
                <li><a href=\"/cluster\">Le cluster</a></li>
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
        // line 74
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
        // line 372
        $this->displayBlock('header', $context, $blocks);
        // line 373
        $this->displayBlock('navbar', $context, $blocks);
        // line 374
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 374, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 375
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 376
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
            ";
                // line 377
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
        // line 381
        $this->displayBlock('content', $context, $blocks);
        // line 382
        $this->displayBlock('body', $context, $blocks);
        // line 383
        $this->displayBlock('footer', $context, $blocks);
        // line 386
        echo "
";
        // line 387
        $this->displayBlock('javascripts', $context, $blocks);
        // line 388
        echo "



</body>
</html>";
        
        $__internal_89cb8b5fb9a4a4d5eeb6c167071bd642874b7baa0cae1f711d21a426ca197b18->leave($__internal_89cb8b5fb9a4a4d5eeb6c167071bd642874b7baa0cae1f711d21a426ca197b18_prof);

        
        $__internal_6d2a575cf8e109d5b9fd3d85ebef60b163cdb271381ec1d4a34022e2584e456c->leave($__internal_6d2a575cf8e109d5b9fd3d85ebef60b163cdb271381ec1d4a34022e2584e456c_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_66a8a142cb0204c0e2b46c8ae39cda1ad5ab07a2feaceefb567079b5954a3971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66a8a142cb0204c0e2b46c8ae39cda1ad5ab07a2feaceefb567079b5954a3971->enter($__internal_66a8a142cb0204c0e2b46c8ae39cda1ad5ab07a2feaceefb567079b5954a3971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5411100b1680f38e80ff32cc950d43a2256b89927d19725ab89236998904b5db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5411100b1680f38e80ff32cc950d43a2256b89927d19725ab89236998904b5db->enter($__internal_5411100b1680f38e80ff32cc950d43a2256b89927d19725ab89236998904b5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5411100b1680f38e80ff32cc950d43a2256b89927d19725ab89236998904b5db->leave($__internal_5411100b1680f38e80ff32cc950d43a2256b89927d19725ab89236998904b5db_prof);

        
        $__internal_66a8a142cb0204c0e2b46c8ae39cda1ad5ab07a2feaceefb567079b5954a3971->leave($__internal_66a8a142cb0204c0e2b46c8ae39cda1ad5ab07a2feaceefb567079b5954a3971_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b2f566ac30dd680eb4bd3c4399398fa23a82ebc80a97121d2d1aeb26ed5d5b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b2f566ac30dd680eb4bd3c4399398fa23a82ebc80a97121d2d1aeb26ed5d5b1->enter($__internal_2b2f566ac30dd680eb4bd3c4399398fa23a82ebc80a97121d2d1aeb26ed5d5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1de7e05bd442995aef83eb314bcfe67fb26e8c91bb369d6cfa1f79e5533a26d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de7e05bd442995aef83eb314bcfe67fb26e8c91bb369d6cfa1f79e5533a26d1->enter($__internal_1de7e05bd442995aef83eb314bcfe67fb26e8c91bb369d6cfa1f79e5533a26d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1de7e05bd442995aef83eb314bcfe67fb26e8c91bb369d6cfa1f79e5533a26d1->leave($__internal_1de7e05bd442995aef83eb314bcfe67fb26e8c91bb369d6cfa1f79e5533a26d1_prof);

        
        $__internal_2b2f566ac30dd680eb4bd3c4399398fa23a82ebc80a97121d2d1aeb26ed5d5b1->leave($__internal_2b2f566ac30dd680eb4bd3c4399398fa23a82ebc80a97121d2d1aeb26ed5d5b1_prof);

    }

    // line 372
    public function block_header($context, array $blocks = array())
    {
        $__internal_04e51f589e152ac1fe8a6a91a939e51ecb73fb191bdc1d6c691c159c045f1b40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04e51f589e152ac1fe8a6a91a939e51ecb73fb191bdc1d6c691c159c045f1b40->enter($__internal_04e51f589e152ac1fe8a6a91a939e51ecb73fb191bdc1d6c691c159c045f1b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_7a9e2140b673782cd6920c9437967bb1d65a17583061b7848573a4522b751fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9e2140b673782cd6920c9437967bb1d65a17583061b7848573a4522b751fa2->enter($__internal_7a9e2140b673782cd6920c9437967bb1d65a17583061b7848573a4522b751fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_7a9e2140b673782cd6920c9437967bb1d65a17583061b7848573a4522b751fa2->leave($__internal_7a9e2140b673782cd6920c9437967bb1d65a17583061b7848573a4522b751fa2_prof);

        
        $__internal_04e51f589e152ac1fe8a6a91a939e51ecb73fb191bdc1d6c691c159c045f1b40->leave($__internal_04e51f589e152ac1fe8a6a91a939e51ecb73fb191bdc1d6c691c159c045f1b40_prof);

    }

    // line 373
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_1df443a1b6f07f3cb046799498099dbb8c0a9c448e9e0c3f57c104591657db2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df443a1b6f07f3cb046799498099dbb8c0a9c448e9e0c3f57c104591657db2e->enter($__internal_1df443a1b6f07f3cb046799498099dbb8c0a9c448e9e0c3f57c104591657db2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_e1bbf251ce2abf526148eba4d4421d0991599930adffb564c47988fc3d76c6e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1bbf251ce2abf526148eba4d4421d0991599930adffb564c47988fc3d76c6e6->enter($__internal_e1bbf251ce2abf526148eba4d4421d0991599930adffb564c47988fc3d76c6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_e1bbf251ce2abf526148eba4d4421d0991599930adffb564c47988fc3d76c6e6->leave($__internal_e1bbf251ce2abf526148eba4d4421d0991599930adffb564c47988fc3d76c6e6_prof);

        
        $__internal_1df443a1b6f07f3cb046799498099dbb8c0a9c448e9e0c3f57c104591657db2e->leave($__internal_1df443a1b6f07f3cb046799498099dbb8c0a9c448e9e0c3f57c104591657db2e_prof);

    }

    // line 381
    public function block_content($context, array $blocks = array())
    {
        $__internal_8d7be5b6d70cc24dc52fff06d372610efd46aacebb65bd32436f9c0ae7de9185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d7be5b6d70cc24dc52fff06d372610efd46aacebb65bd32436f9c0ae7de9185->enter($__internal_8d7be5b6d70cc24dc52fff06d372610efd46aacebb65bd32436f9c0ae7de9185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_81d4836b7e3c1fd302d3eec7e27dafb4fc264a9ab87d1febff1b519e4027555a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d4836b7e3c1fd302d3eec7e27dafb4fc264a9ab87d1febff1b519e4027555a->enter($__internal_81d4836b7e3c1fd302d3eec7e27dafb4fc264a9ab87d1febff1b519e4027555a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_81d4836b7e3c1fd302d3eec7e27dafb4fc264a9ab87d1febff1b519e4027555a->leave($__internal_81d4836b7e3c1fd302d3eec7e27dafb4fc264a9ab87d1febff1b519e4027555a_prof);

        
        $__internal_8d7be5b6d70cc24dc52fff06d372610efd46aacebb65bd32436f9c0ae7de9185->leave($__internal_8d7be5b6d70cc24dc52fff06d372610efd46aacebb65bd32436f9c0ae7de9185_prof);

    }

    // line 382
    public function block_body($context, array $blocks = array())
    {
        $__internal_85a141c59f2063f36df42f7322e5049f8ee3261a4dd65d6d12aa1575ad33ed89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85a141c59f2063f36df42f7322e5049f8ee3261a4dd65d6d12aa1575ad33ed89->enter($__internal_85a141c59f2063f36df42f7322e5049f8ee3261a4dd65d6d12aa1575ad33ed89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63104a8ef7dc7ca4a88cd8d25a8944f284877aeb1e72d43284626cc9e161030a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63104a8ef7dc7ca4a88cd8d25a8944f284877aeb1e72d43284626cc9e161030a->enter($__internal_63104a8ef7dc7ca4a88cd8d25a8944f284877aeb1e72d43284626cc9e161030a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_63104a8ef7dc7ca4a88cd8d25a8944f284877aeb1e72d43284626cc9e161030a->leave($__internal_63104a8ef7dc7ca4a88cd8d25a8944f284877aeb1e72d43284626cc9e161030a_prof);

        
        $__internal_85a141c59f2063f36df42f7322e5049f8ee3261a4dd65d6d12aa1575ad33ed89->leave($__internal_85a141c59f2063f36df42f7322e5049f8ee3261a4dd65d6d12aa1575ad33ed89_prof);

    }

    // line 383
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2a2950b214dba5c4052ab57efaf5f0ec4e718548a859f247549924691601eaac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2950b214dba5c4052ab57efaf5f0ec4e718548a859f247549924691601eaac->enter($__internal_2a2950b214dba5c4052ab57efaf5f0ec4e718548a859f247549924691601eaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_5a0bb6f5ddfc911738d316f8e2dedaa250fa86773fbba36225e3ed7891b9cada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0bb6f5ddfc911738d316f8e2dedaa250fa86773fbba36225e3ed7891b9cada->enter($__internal_5a0bb6f5ddfc911738d316f8e2dedaa250fa86773fbba36225e3ed7891b9cada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " <nav class=\"navbar fixed-bottom navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"/\">Myriapolis</a>
</nav>";
        
        $__internal_5a0bb6f5ddfc911738d316f8e2dedaa250fa86773fbba36225e3ed7891b9cada->leave($__internal_5a0bb6f5ddfc911738d316f8e2dedaa250fa86773fbba36225e3ed7891b9cada_prof);

        
        $__internal_2a2950b214dba5c4052ab57efaf5f0ec4e718548a859f247549924691601eaac->leave($__internal_2a2950b214dba5c4052ab57efaf5f0ec4e718548a859f247549924691601eaac_prof);

    }

    // line 387
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb0523654f6bbe8c9e2916aa8b338876892c187551f2be8e65a761f26756c82f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb0523654f6bbe8c9e2916aa8b338876892c187551f2be8e65a761f26756c82f->enter($__internal_eb0523654f6bbe8c9e2916aa8b338876892c187551f2be8e65a761f26756c82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3cb47f0c376ac4efc442dba05f974d06f3024fe4b74c47ae56ece2e130cafe9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb47f0c376ac4efc442dba05f974d06f3024fe4b74c47ae56ece2e130cafe9e->enter($__internal_3cb47f0c376ac4efc442dba05f974d06f3024fe4b74c47ae56ece2e130cafe9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3cb47f0c376ac4efc442dba05f974d06f3024fe4b74c47ae56ece2e130cafe9e->leave($__internal_3cb47f0c376ac4efc442dba05f974d06f3024fe4b74c47ae56ece2e130cafe9e_prof);

        
        $__internal_eb0523654f6bbe8c9e2916aa8b338876892c187551f2be8e65a761f26756c82f->leave($__internal_eb0523654f6bbe8c9e2916aa8b338876892c187551f2be8e65a761f26756c82f_prof);

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
        return array (  609 => 387,  589 => 383,  572 => 382,  555 => 381,  538 => 373,  521 => 372,  504 => 11,  487 => 9,  472 => 388,  470 => 387,  467 => 386,  465 => 383,  463 => 382,  461 => 381,  448 => 377,  443 => 376,  438 => 375,  434 => 374,  432 => 373,  430 => 372,  130 => 74,  106 => 51,  100 => 49,  97 => 48,  90 => 45,  88 => 44,  85 => 42,  83 => 41,  50 => 12,  48 => 11,  43 => 9,  33 => 1,);
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
                <li><a  href=\"/profile\">Mon Profil</a></li>
                <li class=\"active\"><a href=\"\">register</a></li>
                <li><a href=\"/cluster\">Le cluster</a></li>
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
