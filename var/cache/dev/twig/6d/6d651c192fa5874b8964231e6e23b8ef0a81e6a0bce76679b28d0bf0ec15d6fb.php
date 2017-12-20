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
        $__internal_0dbb65740f2cdc7d1edd61455b0f72ac38dad18979fa8fac16dc8ed431a48f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dbb65740f2cdc7d1edd61455b0f72ac38dad18979fa8fac16dc8ed431a48f57->enter($__internal_0dbb65740f2cdc7d1edd61455b0f72ac38dad18979fa8fac16dc8ed431a48f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_b044a8201e29f661f9f95126f85e78fba6026b8730e5879848b57aa0d38d785c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b044a8201e29f661f9f95126f85e78fba6026b8730e5879848b57aa0d38d785c->enter($__internal_b044a8201e29f661f9f95126f85e78fba6026b8730e5879848b57aa0d38d785c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dbb65740f2cdc7d1edd61455b0f72ac38dad18979fa8fac16dc8ed431a48f57->leave($__internal_0dbb65740f2cdc7d1edd61455b0f72ac38dad18979fa8fac16dc8ed431a48f57_prof);

        
        $__internal_b044a8201e29f661f9f95126f85e78fba6026b8730e5879848b57aa0d38d785c->leave($__internal_b044a8201e29f661f9f95126f85e78fba6026b8730e5879848b57aa0d38d785c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac724b2a66c08cbb008cd29e95b048b05d49836992bfccf2330d4ffbf3df589f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac724b2a66c08cbb008cd29e95b048b05d49836992bfccf2330d4ffbf3df589f->enter($__internal_ac724b2a66c08cbb008cd29e95b048b05d49836992bfccf2330d4ffbf3df589f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d83c154b6595cfb78c80b1fc124bd2684e6ea26f0e5443ead64ec289d518f571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83c154b6595cfb78c80b1fc124bd2684e6ea26f0e5443ead64ec289d518f571->enter($__internal_d83c154b6595cfb78c80b1fc124bd2684e6ea26f0e5443ead64ec289d518f571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_d83c154b6595cfb78c80b1fc124bd2684e6ea26f0e5443ead64ec289d518f571->leave($__internal_d83c154b6595cfb78c80b1fc124bd2684e6ea26f0e5443ead64ec289d518f571_prof);

        
        $__internal_ac724b2a66c08cbb008cd29e95b048b05d49836992bfccf2330d4ffbf3df589f->leave($__internal_ac724b2a66c08cbb008cd29e95b048b05d49836992bfccf2330d4ffbf3df589f_prof);

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
