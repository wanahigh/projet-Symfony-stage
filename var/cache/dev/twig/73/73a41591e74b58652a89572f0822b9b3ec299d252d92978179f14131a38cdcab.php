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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d69e8d299787b43e526804bf101e0047a6dd63ba5c6ea0179b639edb1fd8d348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d69e8d299787b43e526804bf101e0047a6dd63ba5c6ea0179b639edb1fd8d348->enter($__internal_d69e8d299787b43e526804bf101e0047a6dd63ba5c6ea0179b639edb1fd8d348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fcd6179dbdaea47d5ffe872295d4560076845c22c8af4ab15b04cc4e23500069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd6179dbdaea47d5ffe872295d4560076845c22c8af4ab15b04cc4e23500069->enter($__internal_fcd6179dbdaea47d5ffe872295d4560076845c22c8af4ab15b04cc4e23500069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">


    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <!-- Compiled and minified CSS BOOSTRAP -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css\">
    <!-- Compiled and minified CSS MATERIALIZE -->


    ";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
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
                <div class=\"chip\">
                <div>
                    ";
        // line 48
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 49
            echo "                         ";
            // line 50
            echo "                        ";
            // line 51
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                    ";
        } else {
            // line 53
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                    ";
        }
        // line 54
        echo "</div>
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
        // line 78
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

    .page-footer
    {
        margin-top:25%;
    }


</style>

<!-- Compiled and minified JavaScript BOOSTRAPE, JQuery, MATERIALIZE -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>
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
        // line 381
        $this->displayBlock('header', $context, $blocks);
        // line 382
        $this->displayBlock('navbar', $context, $blocks);
        // line 383
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 383, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 384
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 385
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
            ";
                // line 386
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
        // line 390
        $this->displayBlock('content', $context, $blocks);
        // line 391
        $this->displayBlock('body', $context, $blocks);
        // line 392
        echo "
<footer class=\"page-footer blue\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col l6 s12\">
                <h5 class=\"white-text\">Footer Content</h5>
                <p class=\"grey-text text-lighten-4\">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class=\"col l4 offset-l2 s12\">
                <h5 class=\"white-text\">Links</h5>
                <ul>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 1</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 2</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 3</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer-copyright\">
        <div class=\"container\">
            © 2014 Copyright Text
            <a class=\"grey-text text-lighten-4 right\" href=\"#!\">More Links</a>
        </div>
    </div>
</footer>

";
        // line 419
        $this->displayBlock('javascripts', $context, $blocks);
        // line 420
        echo "



</body>
</html>";
        
        $__internal_d69e8d299787b43e526804bf101e0047a6dd63ba5c6ea0179b639edb1fd8d348->leave($__internal_d69e8d299787b43e526804bf101e0047a6dd63ba5c6ea0179b639edb1fd8d348_prof);

        
        $__internal_fcd6179dbdaea47d5ffe872295d4560076845c22c8af4ab15b04cc4e23500069->leave($__internal_fcd6179dbdaea47d5ffe872295d4560076845c22c8af4ab15b04cc4e23500069_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_610e2ed9c5a35a74ebd4e14e241b3b0cb3e99f3366ad9ed4fea88cbb06711ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_610e2ed9c5a35a74ebd4e14e241b3b0cb3e99f3366ad9ed4fea88cbb06711ac6->enter($__internal_610e2ed9c5a35a74ebd4e14e241b3b0cb3e99f3366ad9ed4fea88cbb06711ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_afd37a3365bc7e502b8271a752c27bff028580fdab410b6c8e865dd629c95246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd37a3365bc7e502b8271a752c27bff028580fdab410b6c8e865dd629c95246->enter($__internal_afd37a3365bc7e502b8271a752c27bff028580fdab410b6c8e865dd629c95246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_afd37a3365bc7e502b8271a752c27bff028580fdab410b6c8e865dd629c95246->leave($__internal_afd37a3365bc7e502b8271a752c27bff028580fdab410b6c8e865dd629c95246_prof);

        
        $__internal_610e2ed9c5a35a74ebd4e14e241b3b0cb3e99f3366ad9ed4fea88cbb06711ac6->leave($__internal_610e2ed9c5a35a74ebd4e14e241b3b0cb3e99f3366ad9ed4fea88cbb06711ac6_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_abf02660874dbedf9f2d4b84f4005c10cefe54c840377467b12db7d9501f431d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf02660874dbedf9f2d4b84f4005c10cefe54c840377467b12db7d9501f431d->enter($__internal_abf02660874dbedf9f2d4b84f4005c10cefe54c840377467b12db7d9501f431d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_83c942175fd1a1cd7c34145e9d5ba08cb20d825ac78d5e98fcb90a3b6b553a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c942175fd1a1cd7c34145e9d5ba08cb20d825ac78d5e98fcb90a3b6b553a3c->enter($__internal_83c942175fd1a1cd7c34145e9d5ba08cb20d825ac78d5e98fcb90a3b6b553a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_83c942175fd1a1cd7c34145e9d5ba08cb20d825ac78d5e98fcb90a3b6b553a3c->leave($__internal_83c942175fd1a1cd7c34145e9d5ba08cb20d825ac78d5e98fcb90a3b6b553a3c_prof);

        
        $__internal_abf02660874dbedf9f2d4b84f4005c10cefe54c840377467b12db7d9501f431d->leave($__internal_abf02660874dbedf9f2d4b84f4005c10cefe54c840377467b12db7d9501f431d_prof);

    }

    // line 381
    public function block_header($context, array $blocks = array())
    {
        $__internal_723486b004abe725e6bbbc030c8edc519bfaa9d87181657762597f16586c0b17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_723486b004abe725e6bbbc030c8edc519bfaa9d87181657762597f16586c0b17->enter($__internal_723486b004abe725e6bbbc030c8edc519bfaa9d87181657762597f16586c0b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_3bf1c04d1ccde57dafbcc475d59bfbc0e6649683820981d6810dfa1b60e69480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf1c04d1ccde57dafbcc475d59bfbc0e6649683820981d6810dfa1b60e69480->enter($__internal_3bf1c04d1ccde57dafbcc475d59bfbc0e6649683820981d6810dfa1b60e69480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_3bf1c04d1ccde57dafbcc475d59bfbc0e6649683820981d6810dfa1b60e69480->leave($__internal_3bf1c04d1ccde57dafbcc475d59bfbc0e6649683820981d6810dfa1b60e69480_prof);

        
        $__internal_723486b004abe725e6bbbc030c8edc519bfaa9d87181657762597f16586c0b17->leave($__internal_723486b004abe725e6bbbc030c8edc519bfaa9d87181657762597f16586c0b17_prof);

    }

    // line 382
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_ccf5100bac8d81d66e2a5ac9aa4ea3c2c6593f0216a86f8944803f355cae1ac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccf5100bac8d81d66e2a5ac9aa4ea3c2c6593f0216a86f8944803f355cae1ac9->enter($__internal_ccf5100bac8d81d66e2a5ac9aa4ea3c2c6593f0216a86f8944803f355cae1ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_dc71ca8661fd35acf1a40ac17588fdca3776c5b84ba1ab1c8babde18269eac7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc71ca8661fd35acf1a40ac17588fdca3776c5b84ba1ab1c8babde18269eac7e->enter($__internal_dc71ca8661fd35acf1a40ac17588fdca3776c5b84ba1ab1c8babde18269eac7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_dc71ca8661fd35acf1a40ac17588fdca3776c5b84ba1ab1c8babde18269eac7e->leave($__internal_dc71ca8661fd35acf1a40ac17588fdca3776c5b84ba1ab1c8babde18269eac7e_prof);

        
        $__internal_ccf5100bac8d81d66e2a5ac9aa4ea3c2c6593f0216a86f8944803f355cae1ac9->leave($__internal_ccf5100bac8d81d66e2a5ac9aa4ea3c2c6593f0216a86f8944803f355cae1ac9_prof);

    }

    // line 390
    public function block_content($context, array $blocks = array())
    {
        $__internal_4ef28f8a0ae96e1334f1c96a1a827f4fe0776aac3e051a3b94b040b1297c59d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef28f8a0ae96e1334f1c96a1a827f4fe0776aac3e051a3b94b040b1297c59d5->enter($__internal_4ef28f8a0ae96e1334f1c96a1a827f4fe0776aac3e051a3b94b040b1297c59d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b30a8b06dbb17d20dc42bd1058cbdd7de4133636c67ce95a927b9602df29fdc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b30a8b06dbb17d20dc42bd1058cbdd7de4133636c67ce95a927b9602df29fdc6->enter($__internal_b30a8b06dbb17d20dc42bd1058cbdd7de4133636c67ce95a927b9602df29fdc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_b30a8b06dbb17d20dc42bd1058cbdd7de4133636c67ce95a927b9602df29fdc6->leave($__internal_b30a8b06dbb17d20dc42bd1058cbdd7de4133636c67ce95a927b9602df29fdc6_prof);

        
        $__internal_4ef28f8a0ae96e1334f1c96a1a827f4fe0776aac3e051a3b94b040b1297c59d5->leave($__internal_4ef28f8a0ae96e1334f1c96a1a827f4fe0776aac3e051a3b94b040b1297c59d5_prof);

    }

    // line 391
    public function block_body($context, array $blocks = array())
    {
        $__internal_159d1ae2629ee25c4cac218f25c8834f7d9dd540987186bc3fcef551b30b0c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_159d1ae2629ee25c4cac218f25c8834f7d9dd540987186bc3fcef551b30b0c3d->enter($__internal_159d1ae2629ee25c4cac218f25c8834f7d9dd540987186bc3fcef551b30b0c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f982262fcc92675b10b555916595b576091946c6c7e91bfdc55cbe3b265babeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f982262fcc92675b10b555916595b576091946c6c7e91bfdc55cbe3b265babeb->enter($__internal_f982262fcc92675b10b555916595b576091946c6c7e91bfdc55cbe3b265babeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f982262fcc92675b10b555916595b576091946c6c7e91bfdc55cbe3b265babeb->leave($__internal_f982262fcc92675b10b555916595b576091946c6c7e91bfdc55cbe3b265babeb_prof);

        
        $__internal_159d1ae2629ee25c4cac218f25c8834f7d9dd540987186bc3fcef551b30b0c3d->leave($__internal_159d1ae2629ee25c4cac218f25c8834f7d9dd540987186bc3fcef551b30b0c3d_prof);

    }

    // line 419
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ff30107721acf064cd5fee3255546e301a335d82f1e7ca940b36f1c1403b9f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff30107721acf064cd5fee3255546e301a335d82f1e7ca940b36f1c1403b9f7->enter($__internal_0ff30107721acf064cd5fee3255546e301a335d82f1e7ca940b36f1c1403b9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_afeb406008bfeb3d62150f51fa2a62a97da8bf91e3c07b9f358bce59abea022c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afeb406008bfeb3d62150f51fa2a62a97da8bf91e3c07b9f358bce59abea022c->enter($__internal_afeb406008bfeb3d62150f51fa2a62a97da8bf91e3c07b9f358bce59abea022c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_afeb406008bfeb3d62150f51fa2a62a97da8bf91e3c07b9f358bce59abea022c->leave($__internal_afeb406008bfeb3d62150f51fa2a62a97da8bf91e3c07b9f358bce59abea022c_prof);

        
        $__internal_0ff30107721acf064cd5fee3255546e301a335d82f1e7ca940b36f1c1403b9f7->leave($__internal_0ff30107721acf064cd5fee3255546e301a335d82f1e7ca940b36f1c1403b9f7_prof);

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
        return array (  620 => 419,  603 => 391,  586 => 390,  569 => 382,  552 => 381,  535 => 17,  518 => 15,  503 => 420,  501 => 419,  472 => 392,  470 => 391,  468 => 390,  455 => 386,  450 => 385,  445 => 384,  441 => 383,  439 => 382,  437 => 381,  132 => 78,  107 => 54,  101 => 53,  95 => 51,  93 => 50,  91 => 49,  89 => 48,  55 => 18,  53 => 17,  48 => 15,  32 => 1,);
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
    <!-- Compiled and minified CSS BOOSTRAP -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css\">
    <!-- Compiled and minified CSS MATERIALIZE -->


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
                <div class=\"chip\">
                <div>
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                         {#{{ app.user.username }}#}
                        {##}
                        <a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
                    {% else %}
                        <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                    {% endif %}</div>
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

    .page-footer
    {
        margin-top:25%;
    }


</style>

<!-- Compiled and minified JavaScript BOOSTRAPE, JQuery, MATERIALIZE -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>
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

<footer class=\"page-footer blue\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col l6 s12\">
                <h5 class=\"white-text\">Footer Content</h5>
                <p class=\"grey-text text-lighten-4\">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class=\"col l4 offset-l2 s12\">
                <h5 class=\"white-text\">Links</h5>
                <ul>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 1</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 2</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 3</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer-copyright\">
        <div class=\"container\">
            © 2014 Copyright Text
            <a class=\"grey-text text-lighten-4 right\" href=\"#!\">More Links</a>
        </div>
    </div>
</footer>

{% block javascripts %}{% endblock %}




</body>
</html>", "base.html.twig", "/var/www/html/Projet-Symfony-master/app/Resources/views/base.html.twig");
    }
}
