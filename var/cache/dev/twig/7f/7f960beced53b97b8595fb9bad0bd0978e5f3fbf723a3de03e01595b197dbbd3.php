<?php

/* AcmeHomeBundle::layout.html.twig */
class __TwigTemplate_b1a94bb7f51728e91eabf66a859e28a0cac46f1730ae4de36ce779a3ff80cd88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeHomeBundle::layout.html.twig", 6);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82f967fdfdb3a8cdd8a9038e48e270b2db21f3a3e6beae05a1df0346bb440381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f967fdfdb3a8cdd8a9038e48e270b2db21f3a3e6beae05a1df0346bb440381->enter($__internal_82f967fdfdb3a8cdd8a9038e48e270b2db21f3a3e6beae05a1df0346bb440381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeHomeBundle::layout.html.twig"));

        $__internal_f15ad8ad2087a0532498c2c0e8ef3f7018f95e565e9e25bc2edd61cb7c4af625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15ad8ad2087a0532498c2c0e8ef3f7018f95e565e9e25bc2edd61cb7c4af625->enter($__internal_f15ad8ad2087a0532498c2c0e8ef3f7018f95e565e9e25bc2edd61cb7c4af625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeHomeBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82f967fdfdb3a8cdd8a9038e48e270b2db21f3a3e6beae05a1df0346bb440381->leave($__internal_82f967fdfdb3a8cdd8a9038e48e270b2db21f3a3e6beae05a1df0346bb440381_prof);

        
        $__internal_f15ad8ad2087a0532498c2c0e8ef3f7018f95e565e9e25bc2edd61cb7c4af625->leave($__internal_f15ad8ad2087a0532498c2c0e8ef3f7018f95e565e9e25bc2edd61cb7c4af625_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_08f2638dae1a6177e0563367724cb4c24da68746188865586fcf51c432467aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f2638dae1a6177e0563367724cb4c24da68746188865586fcf51c432467aad->enter($__internal_08f2638dae1a6177e0563367724cb4c24da68746188865586fcf51c432467aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8891a313408333e04ff0805537afa2ed517896b23a242fa847479e437686badd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8891a313408333e04ff0805537afa2ed517896b23a242fa847479e437686badd->enter($__internal_8891a313408333e04ff0805537afa2ed517896b23a242fa847479e437686badd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "

    ";
        // line 15
        echo "
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 17
            echo "
        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 19
                echo "
            <div class=\"alert alert-";
                // line 20
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">

                ";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "

            </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "

    ";
        // line 32
        echo "
    ";
        // line 33
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 36
        echo "

";
        
        $__internal_8891a313408333e04ff0805537afa2ed517896b23a242fa847479e437686badd->leave($__internal_8891a313408333e04ff0805537afa2ed517896b23a242fa847479e437686badd_prof);

        
        $__internal_08f2638dae1a6177e0563367724cb4c24da68746188865586fcf51c432467aad->leave($__internal_08f2638dae1a6177e0563367724cb4c24da68746188865586fcf51c432467aad_prof);

    }

    // line 33
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c69430962deb922669f7eab341504bad686a2c0c90b090e8883a3633edb5ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c69430962deb922669f7eab341504bad686a2c0c90b090e8883a3633edb5ba7->enter($__internal_8c69430962deb922669f7eab341504bad686a2c0c90b090e8883a3633edb5ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4669a28c2b8f4dd5a29b217288d66f1c043738561f94f769718111093b71e172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4669a28c2b8f4dd5a29b217288d66f1c043738561f94f769718111093b71e172->enter($__internal_4669a28c2b8f4dd5a29b217288d66f1c043738561f94f769718111093b71e172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 34
        echo "
    ";
        
        $__internal_4669a28c2b8f4dd5a29b217288d66f1c043738561f94f769718111093b71e172->leave($__internal_4669a28c2b8f4dd5a29b217288d66f1c043738561f94f769718111093b71e172_prof);

        
        $__internal_8c69430962deb922669f7eab341504bad686a2c0c90b090e8883a3633edb5ba7->leave($__internal_8c69430962deb922669f7eab341504bad686a2c0c90b090e8883a3633edb5ba7_prof);

    }

    public function getTemplateName()
    {
        return "AcmeHomeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 34,  115 => 33,  103 => 36,  101 => 33,  98 => 32,  94 => 29,  87 => 27,  76 => 22,  71 => 20,  68 => 19,  64 => 18,  61 => 17,  57 => 16,  54 => 15,  50 => 12,  41 => 11,  11 => 6,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/UserBundle/Resources/views/layout.html.twig #}


{# On étend notre layout #}

{% extends \"::base.html.twig\" %}


{# Dans notre layout, il faut définir le block body #}

{% block body %}


    {# On affiche les messages flash que définissent les contrôleurs du bundle #}

    {% for key, messages in app.session.flashbag.all() %}

        {% for message in messages %}

            <div class=\"alert alert-{{ key }}\">

                {{ message|trans({}, 'FOSUserBundle') }}

            </div>

        {% endfor %}

    {% endfor %}


    {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}

    {% block fos_user_content %}

    {% endblock fos_user_content %}


{% endblock %}", "AcmeHomeBundle::layout.html.twig", "/var/www/html/Projet-Symfony-master/src/Acme/AdminBundle/Resources/views/layout.html.twig");
    }
}
