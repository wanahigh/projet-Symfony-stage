<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_82e1ea99c897434c57d2ee61f9461df57e6c4b3ac52d182d1267cc818b03184c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_2a5d7fbda14afa568207676006ec4e96c609dd8354fae148369ea38eee744488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a5d7fbda14afa568207676006ec4e96c609dd8354fae148369ea38eee744488->enter($__internal_2a5d7fbda14afa568207676006ec4e96c609dd8354fae148369ea38eee744488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_750c8c31a4b9e276bf6233d34d7b806bea4f2debbd61e8f45388fea9a1b0b585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750c8c31a4b9e276bf6233d34d7b806bea4f2debbd61e8f45388fea9a1b0b585->enter($__internal_750c8c31a4b9e276bf6233d34d7b806bea4f2debbd61e8f45388fea9a1b0b585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a5d7fbda14afa568207676006ec4e96c609dd8354fae148369ea38eee744488->leave($__internal_2a5d7fbda14afa568207676006ec4e96c609dd8354fae148369ea38eee744488_prof);

        
        $__internal_750c8c31a4b9e276bf6233d34d7b806bea4f2debbd61e8f45388fea9a1b0b585->leave($__internal_750c8c31a4b9e276bf6233d34d7b806bea4f2debbd61e8f45388fea9a1b0b585_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ba510751806398b4a59cb82e9452e960cc65a55db2c7d2c603dfd488c804657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ba510751806398b4a59cb82e9452e960cc65a55db2c7d2c603dfd488c804657->enter($__internal_5ba510751806398b4a59cb82e9452e960cc65a55db2c7d2c603dfd488c804657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8fa2defef91c866a6c8998dfff4197432cde1d7e81d2236b96fbd5997ca0f4f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa2defef91c866a6c8998dfff4197432cde1d7e81d2236b96fbd5997ca0f4f2->enter($__internal_8fa2defef91c866a6c8998dfff4197432cde1d7e81d2236b96fbd5997ca0f4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_8fa2defef91c866a6c8998dfff4197432cde1d7e81d2236b96fbd5997ca0f4f2->leave($__internal_8fa2defef91c866a6c8998dfff4197432cde1d7e81d2236b96fbd5997ca0f4f2_prof);

        
        $__internal_5ba510751806398b4a59cb82e9452e960cc65a55db2c7d2c603dfd488c804657->leave($__internal_5ba510751806398b4a59cb82e9452e960cc65a55db2c7d2c603dfd488c804657_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
