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
        $__internal_6d639ea86ca9c8cf7a4093f1637b145fef7affa8b5f13eccec419c775667765f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d639ea86ca9c8cf7a4093f1637b145fef7affa8b5f13eccec419c775667765f->enter($__internal_6d639ea86ca9c8cf7a4093f1637b145fef7affa8b5f13eccec419c775667765f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5ec1f1f5aaf1bc89b7a12a617314de85c8d8bb3f554adc733e2aad8b6b16536f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec1f1f5aaf1bc89b7a12a617314de85c8d8bb3f554adc733e2aad8b6b16536f->enter($__internal_5ec1f1f5aaf1bc89b7a12a617314de85c8d8bb3f554adc733e2aad8b6b16536f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <!-- Compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css\">
    <!-- Compiled and minified JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>
</head>

    ";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <div class=\"navbar-fixed\">
        <nav>
            <div class=\"nav-wrapper blue\">
                <a href=\"/\" class=\"brand-logo center\">Logo</a>
                <ul class=\"left hide-on-med-and-down\">
                    <li><a href=\"/Filiale\">La Filiaire</a></li>
                    <li><a href=\"/Work\">Les Travaux</a></li>
                    <li><a href=\"/entity_actor\">Les Acteurs</a></li>
                    <li><a href=\"/entity_advert\">L'actu</a></li>
                    <li><a href=\"/contact\">Contacts</a></li>
                    <div class=\"chip pink   \">
                            ";
        // line 27
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 28
            echo "                            ";
            // line 29
            echo "                            ";
            // line 30
            echo "                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                            ";
        } else {
            // line 32
            echo "                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                        ";
        }
        // line 33
        echo "</li>
            </div>
                </ul>
        </div>
        </nav>
    </div>




<style>



    .page-footer
    {
        margin-top:25%;
    }


</style>


";
        // line 56
        $this->displayBlock('header', $context, $blocks);
        // line 57
        $this->displayBlock('navbar', $context, $blocks);
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 58, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 59
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 60
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
            ";
                // line 61
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
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 67
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
        // line 94
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
        echo "



</body>
</html>";
        
        $__internal_6d639ea86ca9c8cf7a4093f1637b145fef7affa8b5f13eccec419c775667765f->leave($__internal_6d639ea86ca9c8cf7a4093f1637b145fef7affa8b5f13eccec419c775667765f_prof);

        
        $__internal_5ec1f1f5aaf1bc89b7a12a617314de85c8d8bb3f554adc733e2aad8b6b16536f->leave($__internal_5ec1f1f5aaf1bc89b7a12a617314de85c8d8bb3f554adc733e2aad8b6b16536f_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7ceda2a2c8c70cac54e9da9e52ce660ed93eea6a8ceb1cd4eea2fdc8bf2fb5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ceda2a2c8c70cac54e9da9e52ce660ed93eea6a8ceb1cd4eea2fdc8bf2fb5b->enter($__internal_a7ceda2a2c8c70cac54e9da9e52ce660ed93eea6a8ceb1cd4eea2fdc8bf2fb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e9f44785567a0a3a80365b22b056bc2b73f3794c05f837ad94cc0b549bd173fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f44785567a0a3a80365b22b056bc2b73f3794c05f837ad94cc0b549bd173fb->enter($__internal_e9f44785567a0a3a80365b22b056bc2b73f3794c05f837ad94cc0b549bd173fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e9f44785567a0a3a80365b22b056bc2b73f3794c05f837ad94cc0b549bd173fb->leave($__internal_e9f44785567a0a3a80365b22b056bc2b73f3794c05f837ad94cc0b549bd173fb_prof);

        
        $__internal_a7ceda2a2c8c70cac54e9da9e52ce660ed93eea6a8ceb1cd4eea2fdc8bf2fb5b->leave($__internal_a7ceda2a2c8c70cac54e9da9e52ce660ed93eea6a8ceb1cd4eea2fdc8bf2fb5b_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_134231081b1fd6a2c975bc92f44d1a358d2c2d68d4042da968ca76a0155cf838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_134231081b1fd6a2c975bc92f44d1a358d2c2d68d4042da968ca76a0155cf838->enter($__internal_134231081b1fd6a2c975bc92f44d1a358d2c2d68d4042da968ca76a0155cf838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c6148eab36ddec17cdca9d8f966171374544b1669239e7f50ce3b462c7e35b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6148eab36ddec17cdca9d8f966171374544b1669239e7f50ce3b462c7e35b60->enter($__internal_c6148eab36ddec17cdca9d8f966171374544b1669239e7f50ce3b462c7e35b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c6148eab36ddec17cdca9d8f966171374544b1669239e7f50ce3b462c7e35b60->leave($__internal_c6148eab36ddec17cdca9d8f966171374544b1669239e7f50ce3b462c7e35b60_prof);

        
        $__internal_134231081b1fd6a2c975bc92f44d1a358d2c2d68d4042da968ca76a0155cf838->leave($__internal_134231081b1fd6a2c975bc92f44d1a358d2c2d68d4042da968ca76a0155cf838_prof);

    }

    // line 56
    public function block_header($context, array $blocks = array())
    {
        $__internal_cfce38e1506131a65938f6ad73a944e30dca2052ee2a47e6ec1bd6aa015d663b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfce38e1506131a65938f6ad73a944e30dca2052ee2a47e6ec1bd6aa015d663b->enter($__internal_cfce38e1506131a65938f6ad73a944e30dca2052ee2a47e6ec1bd6aa015d663b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_92c1cc28925cb08a4c94ff951c4915350d30ff1d60affc88e08161a42f6586c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c1cc28925cb08a4c94ff951c4915350d30ff1d60affc88e08161a42f6586c8->enter($__internal_92c1cc28925cb08a4c94ff951c4915350d30ff1d60affc88e08161a42f6586c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_92c1cc28925cb08a4c94ff951c4915350d30ff1d60affc88e08161a42f6586c8->leave($__internal_92c1cc28925cb08a4c94ff951c4915350d30ff1d60affc88e08161a42f6586c8_prof);

        
        $__internal_cfce38e1506131a65938f6ad73a944e30dca2052ee2a47e6ec1bd6aa015d663b->leave($__internal_cfce38e1506131a65938f6ad73a944e30dca2052ee2a47e6ec1bd6aa015d663b_prof);

    }

    // line 57
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_193d8c872061e6be60d4c03e3524294854ee1e159b90afa631b3e5a4e7c7adc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193d8c872061e6be60d4c03e3524294854ee1e159b90afa631b3e5a4e7c7adc7->enter($__internal_193d8c872061e6be60d4c03e3524294854ee1e159b90afa631b3e5a4e7c7adc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_d3e176abaa97bfc50163318db2b975bed7e6846be65bf36c1f5b6366906defeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e176abaa97bfc50163318db2b975bed7e6846be65bf36c1f5b6366906defeb->enter($__internal_d3e176abaa97bfc50163318db2b975bed7e6846be65bf36c1f5b6366906defeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_d3e176abaa97bfc50163318db2b975bed7e6846be65bf36c1f5b6366906defeb->leave($__internal_d3e176abaa97bfc50163318db2b975bed7e6846be65bf36c1f5b6366906defeb_prof);

        
        $__internal_193d8c872061e6be60d4c03e3524294854ee1e159b90afa631b3e5a4e7c7adc7->leave($__internal_193d8c872061e6be60d4c03e3524294854ee1e159b90afa631b3e5a4e7c7adc7_prof);

    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        $__internal_c3b881bf5e69a5f6769f04c8b6c15ff8987fa85d8ac125626b45cc787d651c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b881bf5e69a5f6769f04c8b6c15ff8987fa85d8ac125626b45cc787d651c2d->enter($__internal_c3b881bf5e69a5f6769f04c8b6c15ff8987fa85d8ac125626b45cc787d651c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b20df1662069389f214c3d837e60a83f1d78e0186376897d5a7476fccd67efab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20df1662069389f214c3d837e60a83f1d78e0186376897d5a7476fccd67efab->enter($__internal_b20df1662069389f214c3d837e60a83f1d78e0186376897d5a7476fccd67efab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_b20df1662069389f214c3d837e60a83f1d78e0186376897d5a7476fccd67efab->leave($__internal_b20df1662069389f214c3d837e60a83f1d78e0186376897d5a7476fccd67efab_prof);

        
        $__internal_c3b881bf5e69a5f6769f04c8b6c15ff8987fa85d8ac125626b45cc787d651c2d->leave($__internal_c3b881bf5e69a5f6769f04c8b6c15ff8987fa85d8ac125626b45cc787d651c2d_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_459b7213f5bc4ae4131fecf7738aeda0420050c66b114d6e509f6b48e778b0cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459b7213f5bc4ae4131fecf7738aeda0420050c66b114d6e509f6b48e778b0cd->enter($__internal_459b7213f5bc4ae4131fecf7738aeda0420050c66b114d6e509f6b48e778b0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d42c4b1b0c8ab76cfba7be9d3d55a6a94e92b8ae12125a1affa61e2d34e71af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d42c4b1b0c8ab76cfba7be9d3d55a6a94e92b8ae12125a1affa61e2d34e71af->enter($__internal_1d42c4b1b0c8ab76cfba7be9d3d55a6a94e92b8ae12125a1affa61e2d34e71af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1d42c4b1b0c8ab76cfba7be9d3d55a6a94e92b8ae12125a1affa61e2d34e71af->leave($__internal_1d42c4b1b0c8ab76cfba7be9d3d55a6a94e92b8ae12125a1affa61e2d34e71af_prof);

        
        $__internal_459b7213f5bc4ae4131fecf7738aeda0420050c66b114d6e509f6b48e778b0cd->leave($__internal_459b7213f5bc4ae4131fecf7738aeda0420050c66b114d6e509f6b48e778b0cd_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca5d46e3528b9adff5090a2ffbf54786540e1247074a9957ec08c166af14fb23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca5d46e3528b9adff5090a2ffbf54786540e1247074a9957ec08c166af14fb23->enter($__internal_ca5d46e3528b9adff5090a2ffbf54786540e1247074a9957ec08c166af14fb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_00cdf5041c494e8def1ac33e1b5132a79c6e2de645d996eefd9b75df36df08a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00cdf5041c494e8def1ac33e1b5132a79c6e2de645d996eefd9b75df36df08a0->enter($__internal_00cdf5041c494e8def1ac33e1b5132a79c6e2de645d996eefd9b75df36df08a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_00cdf5041c494e8def1ac33e1b5132a79c6e2de645d996eefd9b75df36df08a0->leave($__internal_00cdf5041c494e8def1ac33e1b5132a79c6e2de645d996eefd9b75df36df08a0_prof);

        
        $__internal_ca5d46e3528b9adff5090a2ffbf54786540e1247074a9957ec08c166af14fb23->leave($__internal_ca5d46e3528b9adff5090a2ffbf54786540e1247074a9957ec08c166af14fb23_prof);

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
        return array (  292 => 94,  275 => 66,  258 => 65,  241 => 57,  224 => 56,  207 => 15,  190 => 13,  175 => 95,  173 => 94,  144 => 67,  142 => 66,  140 => 65,  127 => 61,  122 => 60,  117 => 59,  113 => 58,  111 => 57,  109 => 56,  84 => 33,  78 => 32,  72 => 30,  70 => 29,  68 => 28,  66 => 27,  53 => 16,  51 => 15,  46 => 13,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <!-- Compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css\">
    <!-- Compiled and minified JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>
</head>

    {% block title %}{% endblock %}</title>

    {% block stylesheets %}{% endblock %}
    <div class=\"navbar-fixed\">
        <nav>
            <div class=\"nav-wrapper blue\">
                <a href=\"/\" class=\"brand-logo center\">Logo</a>
                <ul class=\"left hide-on-med-and-down\">
                    <li><a href=\"/Filiale\">La Filiaire</a></li>
                    <li><a href=\"/Work\">Les Travaux</a></li>
                    <li><a href=\"/entity_actor\">Les Acteurs</a></li>
                    <li><a href=\"/entity_advert\">L'actu</a></li>
                    <li><a href=\"/contact\">Contacts</a></li>
                    <div class=\"chip pink   \">
                            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                            {#{{ app.user.username }}#}
                            {##}
                            <a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
                            {% else %}
                            <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                        {% endif %}</li>
            </div>
                </ul>
        </div>
        </nav>
    </div>




<style>



    .page-footer
    {
        margin-top:25%;
    }


</style>


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
