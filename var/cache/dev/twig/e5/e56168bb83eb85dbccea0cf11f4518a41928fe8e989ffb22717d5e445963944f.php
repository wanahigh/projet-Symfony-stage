<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_d8e9f47a57793a0c895c5c773fb51302394fb61bfed663d12e2c3246c0c3f89b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7f5cf5b88744bba682c6756477cfe3965d5f490d2487aa0f324e376e8c16223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f5cf5b88744bba682c6756477cfe3965d5f490d2487aa0f324e376e8c16223->enter($__internal_e7f5cf5b88744bba682c6756477cfe3965d5f490d2487aa0f324e376e8c16223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_2b715c34cbbc46dd389defc73d2c039720e6d13489d14006845824f9faa9a3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b715c34cbbc46dd389defc73d2c039720e6d13489d14006845824f9faa9a3a3->enter($__internal_2b715c34cbbc46dd389defc73d2c039720e6d13489d14006845824f9faa9a3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_e7f5cf5b88744bba682c6756477cfe3965d5f490d2487aa0f324e376e8c16223->leave($__internal_e7f5cf5b88744bba682c6756477cfe3965d5f490d2487aa0f324e376e8c16223_prof);

        
        $__internal_2b715c34cbbc46dd389defc73d2c039720e6d13489d14006845824f9faa9a3a3->leave($__internal_2b715c34cbbc46dd389defc73d2c039720e6d13489d14006845824f9faa9a3a3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
