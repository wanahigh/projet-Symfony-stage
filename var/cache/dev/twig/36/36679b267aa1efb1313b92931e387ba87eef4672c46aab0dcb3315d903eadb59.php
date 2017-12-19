<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a0f97147cb14d2cbbd6138777e25a3f858365bfc317b359a1e52fa594aa324e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_14e1b4b24ae2dd023ca128ebbae711a0d455668b9d572dc8967b1ec8a9faac88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e1b4b24ae2dd023ca128ebbae711a0d455668b9d572dc8967b1ec8a9faac88->enter($__internal_14e1b4b24ae2dd023ca128ebbae711a0d455668b9d572dc8967b1ec8a9faac88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_70411696e277086be30628425091e9498356e43a438c91835fe14935e055fda8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70411696e277086be30628425091e9498356e43a438c91835fe14935e055fda8->enter($__internal_70411696e277086be30628425091e9498356e43a438c91835fe14935e055fda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14e1b4b24ae2dd023ca128ebbae711a0d455668b9d572dc8967b1ec8a9faac88->leave($__internal_14e1b4b24ae2dd023ca128ebbae711a0d455668b9d572dc8967b1ec8a9faac88_prof);

        
        $__internal_70411696e277086be30628425091e9498356e43a438c91835fe14935e055fda8->leave($__internal_70411696e277086be30628425091e9498356e43a438c91835fe14935e055fda8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ba9f80acded74b6fcd5c9f4559561fb26c5064a66e84e621072551e242b8ac3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba9f80acded74b6fcd5c9f4559561fb26c5064a66e84e621072551e242b8ac3f->enter($__internal_ba9f80acded74b6fcd5c9f4559561fb26c5064a66e84e621072551e242b8ac3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_19665b7adb10dda9d50d5283dbd7cafa9cb3687c2d9af01dc0755fa54507db86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19665b7adb10dda9d50d5283dbd7cafa9cb3687c2d9af01dc0755fa54507db86->enter($__internal_19665b7adb10dda9d50d5283dbd7cafa9cb3687c2d9af01dc0755fa54507db86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_19665b7adb10dda9d50d5283dbd7cafa9cb3687c2d9af01dc0755fa54507db86->leave($__internal_19665b7adb10dda9d50d5283dbd7cafa9cb3687c2d9af01dc0755fa54507db86_prof);

        
        $__internal_ba9f80acded74b6fcd5c9f4559561fb26c5064a66e84e621072551e242b8ac3f->leave($__internal_ba9f80acded74b6fcd5c9f4559561fb26c5064a66e84e621072551e242b8ac3f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
