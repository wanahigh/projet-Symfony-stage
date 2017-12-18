<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_9a6b9b5e83a17ca65be4bc43c88d71e9aa829734cfbe026ed92852496f4c4ce4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_574c54480c7cdb074a3d598f586e676ef20a7c7b6ec42b7332c0b74dfb2cd8f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_574c54480c7cdb074a3d598f586e676ef20a7c7b6ec42b7332c0b74dfb2cd8f9->enter($__internal_574c54480c7cdb074a3d598f586e676ef20a7c7b6ec42b7332c0b74dfb2cd8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_d976770d85ab23882e14fb717baeb3ee2e399f5b5ffa9992a561f7b781ed1bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d976770d85ab23882e14fb717baeb3ee2e399f5b5ffa9992a561f7b781ed1bb1->enter($__internal_d976770d85ab23882e14fb717baeb3ee2e399f5b5ffa9992a561f7b781ed1bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_574c54480c7cdb074a3d598f586e676ef20a7c7b6ec42b7332c0b74dfb2cd8f9->leave($__internal_574c54480c7cdb074a3d598f586e676ef20a7c7b6ec42b7332c0b74dfb2cd8f9_prof);

        
        $__internal_d976770d85ab23882e14fb717baeb3ee2e399f5b5ffa9992a561f7b781ed1bb1->leave($__internal_d976770d85ab23882e14fb717baeb3ee2e399f5b5ffa9992a561f7b781ed1bb1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_17e75ab093b89c6f368aa9fa754aa189df1b8552213ea1ff8bb5967df27d8761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e75ab093b89c6f368aa9fa754aa189df1b8552213ea1ff8bb5967df27d8761->enter($__internal_17e75ab093b89c6f368aa9fa754aa189df1b8552213ea1ff8bb5967df27d8761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_daa6b1b9cc1191291373cde25620434b2f642df0fde32e6f834361cd94d1b395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa6b1b9cc1191291373cde25620434b2f642df0fde32e6f834361cd94d1b395->enter($__internal_daa6b1b9cc1191291373cde25620434b2f642df0fde32e6f834361cd94d1b395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_daa6b1b9cc1191291373cde25620434b2f642df0fde32e6f834361cd94d1b395->leave($__internal_daa6b1b9cc1191291373cde25620434b2f642df0fde32e6f834361cd94d1b395_prof);

        
        $__internal_17e75ab093b89c6f368aa9fa754aa189df1b8552213ea1ff8bb5967df27d8761->leave($__internal_17e75ab093b89c6f368aa9fa754aa189df1b8552213ea1ff8bb5967df27d8761_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
