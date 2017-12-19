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
        $__internal_5b6771a553eb26a19d4a47311e6e3401f75b3101d0a13720e7389690428946ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b6771a553eb26a19d4a47311e6e3401f75b3101d0a13720e7389690428946ce->enter($__internal_5b6771a553eb26a19d4a47311e6e3401f75b3101d0a13720e7389690428946ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_7072f8f2976ac38ed611644d3f926d24e56c2e402cafd79b98009e1168e442ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7072f8f2976ac38ed611644d3f926d24e56c2e402cafd79b98009e1168e442ee->enter($__internal_7072f8f2976ac38ed611644d3f926d24e56c2e402cafd79b98009e1168e442ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b6771a553eb26a19d4a47311e6e3401f75b3101d0a13720e7389690428946ce->leave($__internal_5b6771a553eb26a19d4a47311e6e3401f75b3101d0a13720e7389690428946ce_prof);

        
        $__internal_7072f8f2976ac38ed611644d3f926d24e56c2e402cafd79b98009e1168e442ee->leave($__internal_7072f8f2976ac38ed611644d3f926d24e56c2e402cafd79b98009e1168e442ee_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2f4eef137f64df3a9ccfee88850b9a43b4d1262cab10a8a94b1ee892c6ad3dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f4eef137f64df3a9ccfee88850b9a43b4d1262cab10a8a94b1ee892c6ad3dd->enter($__internal_d2f4eef137f64df3a9ccfee88850b9a43b4d1262cab10a8a94b1ee892c6ad3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_710ae53014f642954d046e5f3e7d79c93ec194ad4a60eaa21f7f5ff199d1ee93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710ae53014f642954d046e5f3e7d79c93ec194ad4a60eaa21f7f5ff199d1ee93->enter($__internal_710ae53014f642954d046e5f3e7d79c93ec194ad4a60eaa21f7f5ff199d1ee93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_710ae53014f642954d046e5f3e7d79c93ec194ad4a60eaa21f7f5ff199d1ee93->leave($__internal_710ae53014f642954d046e5f3e7d79c93ec194ad4a60eaa21f7f5ff199d1ee93_prof);

        
        $__internal_d2f4eef137f64df3a9ccfee88850b9a43b4d1262cab10a8a94b1ee892c6ad3dd->leave($__internal_d2f4eef137f64df3a9ccfee88850b9a43b4d1262cab10a8a94b1ee892c6ad3dd_prof);

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
