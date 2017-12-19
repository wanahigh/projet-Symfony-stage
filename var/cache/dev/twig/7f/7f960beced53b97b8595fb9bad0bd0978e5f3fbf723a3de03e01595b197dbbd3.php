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
        $__internal_28807c72f16d7b499b7b48520b1fdb8783b7e70b14006328b067a6a770d6a290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28807c72f16d7b499b7b48520b1fdb8783b7e70b14006328b067a6a770d6a290->enter($__internal_28807c72f16d7b499b7b48520b1fdb8783b7e70b14006328b067a6a770d6a290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeHomeBundle::layout.html.twig"));

        $__internal_0904a19be3d646ef1f63ca21b498633063f544d2cfe8d927db43ae517ddd9277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0904a19be3d646ef1f63ca21b498633063f544d2cfe8d927db43ae517ddd9277->enter($__internal_0904a19be3d646ef1f63ca21b498633063f544d2cfe8d927db43ae517ddd9277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeHomeBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28807c72f16d7b499b7b48520b1fdb8783b7e70b14006328b067a6a770d6a290->leave($__internal_28807c72f16d7b499b7b48520b1fdb8783b7e70b14006328b067a6a770d6a290_prof);

        
        $__internal_0904a19be3d646ef1f63ca21b498633063f544d2cfe8d927db43ae517ddd9277->leave($__internal_0904a19be3d646ef1f63ca21b498633063f544d2cfe8d927db43ae517ddd9277_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1caf7e508c9a50a6613b32d2c6a29c6a5b3f8be7425eec8f0ec1fe4524c705f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1caf7e508c9a50a6613b32d2c6a29c6a5b3f8be7425eec8f0ec1fe4524c705f->enter($__internal_e1caf7e508c9a50a6613b32d2c6a29c6a5b3f8be7425eec8f0ec1fe4524c705f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96ba626083d45d9bc0a31277133496c3009364ccf4a40b45437895dea6e71a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ba626083d45d9bc0a31277133496c3009364ccf4a40b45437895dea6e71a58->enter($__internal_96ba626083d45d9bc0a31277133496c3009364ccf4a40b45437895dea6e71a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_96ba626083d45d9bc0a31277133496c3009364ccf4a40b45437895dea6e71a58->leave($__internal_96ba626083d45d9bc0a31277133496c3009364ccf4a40b45437895dea6e71a58_prof);

        
        $__internal_e1caf7e508c9a50a6613b32d2c6a29c6a5b3f8be7425eec8f0ec1fe4524c705f->leave($__internal_e1caf7e508c9a50a6613b32d2c6a29c6a5b3f8be7425eec8f0ec1fe4524c705f_prof);

    }

    // line 33
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_edcefe6ef68184a2437e7eb60536444653b2574a1b3662a7b533204495cfc36b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edcefe6ef68184a2437e7eb60536444653b2574a1b3662a7b533204495cfc36b->enter($__internal_edcefe6ef68184a2437e7eb60536444653b2574a1b3662a7b533204495cfc36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b56ba7d555e1c214352a8a6ebb6937e31df865ea7ebcac7ebe2b63d076fd1821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56ba7d555e1c214352a8a6ebb6937e31df865ea7ebcac7ebe2b63d076fd1821->enter($__internal_b56ba7d555e1c214352a8a6ebb6937e31df865ea7ebcac7ebe2b63d076fd1821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 34
        echo "
    ";
        
        $__internal_b56ba7d555e1c214352a8a6ebb6937e31df865ea7ebcac7ebe2b63d076fd1821->leave($__internal_b56ba7d555e1c214352a8a6ebb6937e31df865ea7ebcac7ebe2b63d076fd1821_prof);

        
        $__internal_edcefe6ef68184a2437e7eb60536444653b2574a1b3662a7b533204495cfc36b->leave($__internal_edcefe6ef68184a2437e7eb60536444653b2574a1b3662a7b533204495cfc36b_prof);

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
