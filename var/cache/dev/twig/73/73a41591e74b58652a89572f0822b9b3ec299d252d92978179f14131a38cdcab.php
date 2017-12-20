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
        $__internal_bd9669deefb7bda9b59d8ade73b0d693abb09d4e2f25cab6105fabd63215b836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd9669deefb7bda9b59d8ade73b0d693abb09d4e2f25cab6105fabd63215b836->enter($__internal_bd9669deefb7bda9b59d8ade73b0d693abb09d4e2f25cab6105fabd63215b836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c719a501b05d31da6791f22b0accf3da5975274e8749ca26589dd697d69e1f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c719a501b05d31da6791f22b0accf3da5975274e8749ca26589dd697d69e1f22->enter($__internal_c719a501b05d31da6791f22b0accf3da5975274e8749ca26589dd697d69e1f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                    <li><a href=\"/acteur\">Les Acteurs</a></li>
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
        
        $__internal_bd9669deefb7bda9b59d8ade73b0d693abb09d4e2f25cab6105fabd63215b836->leave($__internal_bd9669deefb7bda9b59d8ade73b0d693abb09d4e2f25cab6105fabd63215b836_prof);

        
        $__internal_c719a501b05d31da6791f22b0accf3da5975274e8749ca26589dd697d69e1f22->leave($__internal_c719a501b05d31da6791f22b0accf3da5975274e8749ca26589dd697d69e1f22_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_01d51044d05b1c76188c2df882bd30397dc5024927c161c6eb2e26bda32f0b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01d51044d05b1c76188c2df882bd30397dc5024927c161c6eb2e26bda32f0b66->enter($__internal_01d51044d05b1c76188c2df882bd30397dc5024927c161c6eb2e26bda32f0b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c107fe16aed170fe6746ccd32bab79e44ec1b49f953360858a5d1455a060c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c107fe16aed170fe6746ccd32bab79e44ec1b49f953360858a5d1455a060c47->enter($__internal_4c107fe16aed170fe6746ccd32bab79e44ec1b49f953360858a5d1455a060c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4c107fe16aed170fe6746ccd32bab79e44ec1b49f953360858a5d1455a060c47->leave($__internal_4c107fe16aed170fe6746ccd32bab79e44ec1b49f953360858a5d1455a060c47_prof);

        
        $__internal_01d51044d05b1c76188c2df882bd30397dc5024927c161c6eb2e26bda32f0b66->leave($__internal_01d51044d05b1c76188c2df882bd30397dc5024927c161c6eb2e26bda32f0b66_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c8a0e1ee468d8da752300906ec7d5228dd23410d0fc55071472e2572142a7efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8a0e1ee468d8da752300906ec7d5228dd23410d0fc55071472e2572142a7efa->enter($__internal_c8a0e1ee468d8da752300906ec7d5228dd23410d0fc55071472e2572142a7efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c7a1825de08c071c5fceb2101d86219177aac5d1d9d34b2da8b16d9f0a529361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a1825de08c071c5fceb2101d86219177aac5d1d9d34b2da8b16d9f0a529361->enter($__internal_c7a1825de08c071c5fceb2101d86219177aac5d1d9d34b2da8b16d9f0a529361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c7a1825de08c071c5fceb2101d86219177aac5d1d9d34b2da8b16d9f0a529361->leave($__internal_c7a1825de08c071c5fceb2101d86219177aac5d1d9d34b2da8b16d9f0a529361_prof);

        
        $__internal_c8a0e1ee468d8da752300906ec7d5228dd23410d0fc55071472e2572142a7efa->leave($__internal_c8a0e1ee468d8da752300906ec7d5228dd23410d0fc55071472e2572142a7efa_prof);

    }

    // line 56
    public function block_header($context, array $blocks = array())
    {
        $__internal_6d7a5c7fdf16679147fabdf80a6ee35646592cb9fddea11bdf82e311d45f09e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d7a5c7fdf16679147fabdf80a6ee35646592cb9fddea11bdf82e311d45f09e0->enter($__internal_6d7a5c7fdf16679147fabdf80a6ee35646592cb9fddea11bdf82e311d45f09e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_dd377296e502000676a5af3ef5dfbe668b986eb0b6d79db3153c4f5aef88eb17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd377296e502000676a5af3ef5dfbe668b986eb0b6d79db3153c4f5aef88eb17->enter($__internal_dd377296e502000676a5af3ef5dfbe668b986eb0b6d79db3153c4f5aef88eb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_dd377296e502000676a5af3ef5dfbe668b986eb0b6d79db3153c4f5aef88eb17->leave($__internal_dd377296e502000676a5af3ef5dfbe668b986eb0b6d79db3153c4f5aef88eb17_prof);

        
        $__internal_6d7a5c7fdf16679147fabdf80a6ee35646592cb9fddea11bdf82e311d45f09e0->leave($__internal_6d7a5c7fdf16679147fabdf80a6ee35646592cb9fddea11bdf82e311d45f09e0_prof);

    }

    // line 57
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_5dbad46ce6ef987649414975ebad97a1abd6cd5d6f712a359a7acc000a366188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dbad46ce6ef987649414975ebad97a1abd6cd5d6f712a359a7acc000a366188->enter($__internal_5dbad46ce6ef987649414975ebad97a1abd6cd5d6f712a359a7acc000a366188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_71f5db3d611158233b0772ae81729d0fb9ed492f1c64c8c50a117b1840827c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f5db3d611158233b0772ae81729d0fb9ed492f1c64c8c50a117b1840827c03->enter($__internal_71f5db3d611158233b0772ae81729d0fb9ed492f1c64c8c50a117b1840827c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_71f5db3d611158233b0772ae81729d0fb9ed492f1c64c8c50a117b1840827c03->leave($__internal_71f5db3d611158233b0772ae81729d0fb9ed492f1c64c8c50a117b1840827c03_prof);

        
        $__internal_5dbad46ce6ef987649414975ebad97a1abd6cd5d6f712a359a7acc000a366188->leave($__internal_5dbad46ce6ef987649414975ebad97a1abd6cd5d6f712a359a7acc000a366188_prof);

    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        $__internal_dd439a33082051cd0ed827a1961ca1236c0d03b65aa3952a04df53478212d742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd439a33082051cd0ed827a1961ca1236c0d03b65aa3952a04df53478212d742->enter($__internal_dd439a33082051cd0ed827a1961ca1236c0d03b65aa3952a04df53478212d742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0652f08f2947d646896ed444a2b48a930f00520633cb6a0f2129fa2e7961710b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0652f08f2947d646896ed444a2b48a930f00520633cb6a0f2129fa2e7961710b->enter($__internal_0652f08f2947d646896ed444a2b48a930f00520633cb6a0f2129fa2e7961710b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0652f08f2947d646896ed444a2b48a930f00520633cb6a0f2129fa2e7961710b->leave($__internal_0652f08f2947d646896ed444a2b48a930f00520633cb6a0f2129fa2e7961710b_prof);

        
        $__internal_dd439a33082051cd0ed827a1961ca1236c0d03b65aa3952a04df53478212d742->leave($__internal_dd439a33082051cd0ed827a1961ca1236c0d03b65aa3952a04df53478212d742_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9376f0f473f1438f4294ef50b390bf5dad1e41b0563d82d4b96e5a192fbf0be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9376f0f473f1438f4294ef50b390bf5dad1e41b0563d82d4b96e5a192fbf0be->enter($__internal_d9376f0f473f1438f4294ef50b390bf5dad1e41b0563d82d4b96e5a192fbf0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_248215248e7545d8005aaed85ee4a50219057a0646162fe33d9485d5d069727b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248215248e7545d8005aaed85ee4a50219057a0646162fe33d9485d5d069727b->enter($__internal_248215248e7545d8005aaed85ee4a50219057a0646162fe33d9485d5d069727b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_248215248e7545d8005aaed85ee4a50219057a0646162fe33d9485d5d069727b->leave($__internal_248215248e7545d8005aaed85ee4a50219057a0646162fe33d9485d5d069727b_prof);

        
        $__internal_d9376f0f473f1438f4294ef50b390bf5dad1e41b0563d82d4b96e5a192fbf0be->leave($__internal_d9376f0f473f1438f4294ef50b390bf5dad1e41b0563d82d4b96e5a192fbf0be_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_811222f4bc9f259a79f9853b34ac05adedcb68b5d3a1a2d5f7e58bf537c8cf65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_811222f4bc9f259a79f9853b34ac05adedcb68b5d3a1a2d5f7e58bf537c8cf65->enter($__internal_811222f4bc9f259a79f9853b34ac05adedcb68b5d3a1a2d5f7e58bf537c8cf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_67a65e79baae5dfef032a44bc7f0fc900495ffc27c06d221095c8006eaba323e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a65e79baae5dfef032a44bc7f0fc900495ffc27c06d221095c8006eaba323e->enter($__internal_67a65e79baae5dfef032a44bc7f0fc900495ffc27c06d221095c8006eaba323e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_67a65e79baae5dfef032a44bc7f0fc900495ffc27c06d221095c8006eaba323e->leave($__internal_67a65e79baae5dfef032a44bc7f0fc900495ffc27c06d221095c8006eaba323e_prof);

        
        $__internal_811222f4bc9f259a79f9853b34ac05adedcb68b5d3a1a2d5f7e58bf537c8cf65->leave($__internal_811222f4bc9f259a79f9853b34ac05adedcb68b5d3a1a2d5f7e58bf537c8cf65_prof);

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
                    <li><a href=\"/acteur\">Les Acteurs</a></li>
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
