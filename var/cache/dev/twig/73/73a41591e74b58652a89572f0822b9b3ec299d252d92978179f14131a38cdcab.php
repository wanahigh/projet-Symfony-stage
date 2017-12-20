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
        $__internal_112531bb3dddb5393e2fc4fb0cdb275347a6ea57ec9b20f28b75b34b42e410cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_112531bb3dddb5393e2fc4fb0cdb275347a6ea57ec9b20f28b75b34b42e410cc->enter($__internal_112531bb3dddb5393e2fc4fb0cdb275347a6ea57ec9b20f28b75b34b42e410cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c4dd733fed322426aa10975594f058befd046cc300fd51d7c5272d76cc14641b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4dd733fed322426aa10975594f058befd046cc300fd51d7c5272d76cc14641b->enter($__internal_c4dd733fed322426aa10975594f058befd046cc300fd51d7c5272d76cc14641b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                <a href=\"/accueil\" class=\"brand-logo center\">Logo</a>
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
        
        $__internal_112531bb3dddb5393e2fc4fb0cdb275347a6ea57ec9b20f28b75b34b42e410cc->leave($__internal_112531bb3dddb5393e2fc4fb0cdb275347a6ea57ec9b20f28b75b34b42e410cc_prof);

        
        $__internal_c4dd733fed322426aa10975594f058befd046cc300fd51d7c5272d76cc14641b->leave($__internal_c4dd733fed322426aa10975594f058befd046cc300fd51d7c5272d76cc14641b_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf4258c31cc505046a8e0bd5d1c274d3edef633c6962c9a51e2cbe6dc3a757c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf4258c31cc505046a8e0bd5d1c274d3edef633c6962c9a51e2cbe6dc3a757c3->enter($__internal_cf4258c31cc505046a8e0bd5d1c274d3edef633c6962c9a51e2cbe6dc3a757c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0982f422ba918b2a7e7ce9ef0c735107f0274a51e1111fa0f1a66c72f90a6088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0982f422ba918b2a7e7ce9ef0c735107f0274a51e1111fa0f1a66c72f90a6088->enter($__internal_0982f422ba918b2a7e7ce9ef0c735107f0274a51e1111fa0f1a66c72f90a6088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0982f422ba918b2a7e7ce9ef0c735107f0274a51e1111fa0f1a66c72f90a6088->leave($__internal_0982f422ba918b2a7e7ce9ef0c735107f0274a51e1111fa0f1a66c72f90a6088_prof);

        
        $__internal_cf4258c31cc505046a8e0bd5d1c274d3edef633c6962c9a51e2cbe6dc3a757c3->leave($__internal_cf4258c31cc505046a8e0bd5d1c274d3edef633c6962c9a51e2cbe6dc3a757c3_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c1d4f36a8003c10da5f547c49ea025b4fb0e30d6ea761d4cea1a6608ea5cc097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d4f36a8003c10da5f547c49ea025b4fb0e30d6ea761d4cea1a6608ea5cc097->enter($__internal_c1d4f36a8003c10da5f547c49ea025b4fb0e30d6ea761d4cea1a6608ea5cc097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_24bf5cc70acd16bbbdc5594f8492c571832d6020d4eb902c8dcc34d1c0ed2c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24bf5cc70acd16bbbdc5594f8492c571832d6020d4eb902c8dcc34d1c0ed2c66->enter($__internal_24bf5cc70acd16bbbdc5594f8492c571832d6020d4eb902c8dcc34d1c0ed2c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_24bf5cc70acd16bbbdc5594f8492c571832d6020d4eb902c8dcc34d1c0ed2c66->leave($__internal_24bf5cc70acd16bbbdc5594f8492c571832d6020d4eb902c8dcc34d1c0ed2c66_prof);

        
        $__internal_c1d4f36a8003c10da5f547c49ea025b4fb0e30d6ea761d4cea1a6608ea5cc097->leave($__internal_c1d4f36a8003c10da5f547c49ea025b4fb0e30d6ea761d4cea1a6608ea5cc097_prof);

    }

    // line 56
    public function block_header($context, array $blocks = array())
    {
        $__internal_b56f9bd242f62c1cfd2685e91676ebf5bc4fcb81cec21f5aa45123230263c0ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b56f9bd242f62c1cfd2685e91676ebf5bc4fcb81cec21f5aa45123230263c0ec->enter($__internal_b56f9bd242f62c1cfd2685e91676ebf5bc4fcb81cec21f5aa45123230263c0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_52a2e6a3b72c2422d6dabb42b4b7b8a56011fe09ccbcabe5bdb1e67bf2e74281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a2e6a3b72c2422d6dabb42b4b7b8a56011fe09ccbcabe5bdb1e67bf2e74281->enter($__internal_52a2e6a3b72c2422d6dabb42b4b7b8a56011fe09ccbcabe5bdb1e67bf2e74281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_52a2e6a3b72c2422d6dabb42b4b7b8a56011fe09ccbcabe5bdb1e67bf2e74281->leave($__internal_52a2e6a3b72c2422d6dabb42b4b7b8a56011fe09ccbcabe5bdb1e67bf2e74281_prof);

        
        $__internal_b56f9bd242f62c1cfd2685e91676ebf5bc4fcb81cec21f5aa45123230263c0ec->leave($__internal_b56f9bd242f62c1cfd2685e91676ebf5bc4fcb81cec21f5aa45123230263c0ec_prof);

    }

    // line 57
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_d5f5ea328baca218eb9a70a37054081a38b7cf68da48d560827aef52abbe2612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f5ea328baca218eb9a70a37054081a38b7cf68da48d560827aef52abbe2612->enter($__internal_d5f5ea328baca218eb9a70a37054081a38b7cf68da48d560827aef52abbe2612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_653974c7d9cb749497533d50a1dd5c32ef7f0d47cddc4153ca1cbc93e971a96f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653974c7d9cb749497533d50a1dd5c32ef7f0d47cddc4153ca1cbc93e971a96f->enter($__internal_653974c7d9cb749497533d50a1dd5c32ef7f0d47cddc4153ca1cbc93e971a96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_653974c7d9cb749497533d50a1dd5c32ef7f0d47cddc4153ca1cbc93e971a96f->leave($__internal_653974c7d9cb749497533d50a1dd5c32ef7f0d47cddc4153ca1cbc93e971a96f_prof);

        
        $__internal_d5f5ea328baca218eb9a70a37054081a38b7cf68da48d560827aef52abbe2612->leave($__internal_d5f5ea328baca218eb9a70a37054081a38b7cf68da48d560827aef52abbe2612_prof);

    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        $__internal_71046db87f09668d9a7b9b97945ec9ec2097c0a776cc19b37e217ee544b956ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71046db87f09668d9a7b9b97945ec9ec2097c0a776cc19b37e217ee544b956ec->enter($__internal_71046db87f09668d9a7b9b97945ec9ec2097c0a776cc19b37e217ee544b956ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_76efbff60ce43f7ea7f35f38b1c5e656b80c3a1a5eda744ee5c05e118326880e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76efbff60ce43f7ea7f35f38b1c5e656b80c3a1a5eda744ee5c05e118326880e->enter($__internal_76efbff60ce43f7ea7f35f38b1c5e656b80c3a1a5eda744ee5c05e118326880e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_76efbff60ce43f7ea7f35f38b1c5e656b80c3a1a5eda744ee5c05e118326880e->leave($__internal_76efbff60ce43f7ea7f35f38b1c5e656b80c3a1a5eda744ee5c05e118326880e_prof);

        
        $__internal_71046db87f09668d9a7b9b97945ec9ec2097c0a776cc19b37e217ee544b956ec->leave($__internal_71046db87f09668d9a7b9b97945ec9ec2097c0a776cc19b37e217ee544b956ec_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_434536af94274441ee99452b565584240014b649dc21d892963afc2ad453ef23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_434536af94274441ee99452b565584240014b649dc21d892963afc2ad453ef23->enter($__internal_434536af94274441ee99452b565584240014b649dc21d892963afc2ad453ef23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d17afcce0e9160ce79640ac9c9da8d7998c783242c4c32a42486e82d767e4c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17afcce0e9160ce79640ac9c9da8d7998c783242c4c32a42486e82d767e4c93->enter($__internal_d17afcce0e9160ce79640ac9c9da8d7998c783242c4c32a42486e82d767e4c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d17afcce0e9160ce79640ac9c9da8d7998c783242c4c32a42486e82d767e4c93->leave($__internal_d17afcce0e9160ce79640ac9c9da8d7998c783242c4c32a42486e82d767e4c93_prof);

        
        $__internal_434536af94274441ee99452b565584240014b649dc21d892963afc2ad453ef23->leave($__internal_434536af94274441ee99452b565584240014b649dc21d892963afc2ad453ef23_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4510f445a55504a6392ad6805c6705191547ffe804ba2c2ed3916b47663249a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4510f445a55504a6392ad6805c6705191547ffe804ba2c2ed3916b47663249a8->enter($__internal_4510f445a55504a6392ad6805c6705191547ffe804ba2c2ed3916b47663249a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c52e1dceb3d8b45197d3a062a2facf3367da740d0483fc82a4b4f3d0e6717752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52e1dceb3d8b45197d3a062a2facf3367da740d0483fc82a4b4f3d0e6717752->enter($__internal_c52e1dceb3d8b45197d3a062a2facf3367da740d0483fc82a4b4f3d0e6717752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c52e1dceb3d8b45197d3a062a2facf3367da740d0483fc82a4b4f3d0e6717752->leave($__internal_c52e1dceb3d8b45197d3a062a2facf3367da740d0483fc82a4b4f3d0e6717752_prof);

        
        $__internal_4510f445a55504a6392ad6805c6705191547ffe804ba2c2ed3916b47663249a8->leave($__internal_4510f445a55504a6392ad6805c6705191547ffe804ba2c2ed3916b47663249a8_prof);

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
                <a href=\"/accueil\" class=\"brand-logo center\">Logo</a>
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
