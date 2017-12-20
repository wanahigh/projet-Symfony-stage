<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_570314277667910dffb1e96957baf5d9a0f37cab244601783ae64ab670080741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ba5f91238925c1dd5cf30395ab4f0f7623a76cc6c294b67ada97fde74a8df9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba5f91238925c1dd5cf30395ab4f0f7623a76cc6c294b67ada97fde74a8df9c->enter($__internal_9ba5f91238925c1dd5cf30395ab4f0f7623a76cc6c294b67ada97fde74a8df9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d0979a38f97288e4080d7e2f93f7556b75284af9d09fb94f8b7f6a33d7634b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0979a38f97288e4080d7e2f93f7556b75284af9d09fb94f8b7f6a33d7634b5c->enter($__internal_d0979a38f97288e4080d7e2f93f7556b75284af9d09fb94f8b7f6a33d7634b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9ba5f91238925c1dd5cf30395ab4f0f7623a76cc6c294b67ada97fde74a8df9c->leave($__internal_9ba5f91238925c1dd5cf30395ab4f0f7623a76cc6c294b67ada97fde74a8df9c_prof);

        
        $__internal_d0979a38f97288e4080d7e2f93f7556b75284af9d09fb94f8b7f6a33d7634b5c->leave($__internal_d0979a38f97288e4080d7e2f93f7556b75284af9d09fb94f8b7f6a33d7634b5c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_29c7596c8cd6483c8dd569f8d43c5ff0b5bd0e1ed3bb1aa185aa67eaae065618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c7596c8cd6483c8dd569f8d43c5ff0b5bd0e1ed3bb1aa185aa67eaae065618->enter($__internal_29c7596c8cd6483c8dd569f8d43c5ff0b5bd0e1ed3bb1aa185aa67eaae065618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_60b75746e5623f76b8a8589b1e480479c0b83b5e8993525e814923e6f8b20b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b75746e5623f76b8a8589b1e480479c0b83b5e8993525e814923e6f8b20b8c->enter($__internal_60b75746e5623f76b8a8589b1e480479c0b83b5e8993525e814923e6f8b20b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_60b75746e5623f76b8a8589b1e480479c0b83b5e8993525e814923e6f8b20b8c->leave($__internal_60b75746e5623f76b8a8589b1e480479c0b83b5e8993525e814923e6f8b20b8c_prof);

        
        $__internal_29c7596c8cd6483c8dd569f8d43c5ff0b5bd0e1ed3bb1aa185aa67eaae065618->leave($__internal_29c7596c8cd6483c8dd569f8d43c5ff0b5bd0e1ed3bb1aa185aa67eaae065618_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
