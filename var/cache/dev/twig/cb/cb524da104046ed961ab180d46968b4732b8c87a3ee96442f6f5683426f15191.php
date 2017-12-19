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
        $__internal_14b4d3d8ec7235dc27c1dc4e34013ea857da4842de60154e4e4399e5a52abafe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14b4d3d8ec7235dc27c1dc4e34013ea857da4842de60154e4e4399e5a52abafe->enter($__internal_14b4d3d8ec7235dc27c1dc4e34013ea857da4842de60154e4e4399e5a52abafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_3cf0ae4555eb23a46789e609d6c1f9e7dc2fbf937d4ca873272e279acd7a351a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf0ae4555eb23a46789e609d6c1f9e7dc2fbf937d4ca873272e279acd7a351a->enter($__internal_3cf0ae4555eb23a46789e609d6c1f9e7dc2fbf937d4ca873272e279acd7a351a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14b4d3d8ec7235dc27c1dc4e34013ea857da4842de60154e4e4399e5a52abafe->leave($__internal_14b4d3d8ec7235dc27c1dc4e34013ea857da4842de60154e4e4399e5a52abafe_prof);

        
        $__internal_3cf0ae4555eb23a46789e609d6c1f9e7dc2fbf937d4ca873272e279acd7a351a->leave($__internal_3cf0ae4555eb23a46789e609d6c1f9e7dc2fbf937d4ca873272e279acd7a351a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_020471890aecbd463c07937484b27b667d33c56aef1b4495d98cdcae44ee989c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_020471890aecbd463c07937484b27b667d33c56aef1b4495d98cdcae44ee989c->enter($__internal_020471890aecbd463c07937484b27b667d33c56aef1b4495d98cdcae44ee989c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_27cfb31408702be8412a8063cfc8482e8bd761845b21bbac3c965bb451c2ebd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27cfb31408702be8412a8063cfc8482e8bd761845b21bbac3c965bb451c2ebd3->enter($__internal_27cfb31408702be8412a8063cfc8482e8bd761845b21bbac3c965bb451c2ebd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_27cfb31408702be8412a8063cfc8482e8bd761845b21bbac3c965bb451c2ebd3->leave($__internal_27cfb31408702be8412a8063cfc8482e8bd761845b21bbac3c965bb451c2ebd3_prof);

        
        $__internal_020471890aecbd463c07937484b27b667d33c56aef1b4495d98cdcae44ee989c->leave($__internal_020471890aecbd463c07937484b27b667d33c56aef1b4495d98cdcae44ee989c_prof);

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
