<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_a5bd4b684f136a382d6b8ff9bc7b351e18542d5bb0be2b56f64c3bc80cc3a08b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_f686aa6e1308a8fa342d5731516055e2879df268cee3ed65e89ae9fbfb6a5255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f686aa6e1308a8fa342d5731516055e2879df268cee3ed65e89ae9fbfb6a5255->enter($__internal_f686aa6e1308a8fa342d5731516055e2879df268cee3ed65e89ae9fbfb6a5255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_aa2948fdbed5ccce13e5e14e7ba9b4f1a0da78bcf4c8ac63d0f1ae99740cf7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa2948fdbed5ccce13e5e14e7ba9b4f1a0da78bcf4c8ac63d0f1ae99740cf7b4->enter($__internal_aa2948fdbed5ccce13e5e14e7ba9b4f1a0da78bcf4c8ac63d0f1ae99740cf7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f686aa6e1308a8fa342d5731516055e2879df268cee3ed65e89ae9fbfb6a5255->leave($__internal_f686aa6e1308a8fa342d5731516055e2879df268cee3ed65e89ae9fbfb6a5255_prof);

        
        $__internal_aa2948fdbed5ccce13e5e14e7ba9b4f1a0da78bcf4c8ac63d0f1ae99740cf7b4->leave($__internal_aa2948fdbed5ccce13e5e14e7ba9b4f1a0da78bcf4c8ac63d0f1ae99740cf7b4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_10e139bb05ac30be610905d0eb0df2952ecf38e10e2cf2f493a6586d69226d50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10e139bb05ac30be610905d0eb0df2952ecf38e10e2cf2f493a6586d69226d50->enter($__internal_10e139bb05ac30be610905d0eb0df2952ecf38e10e2cf2f493a6586d69226d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ec0a73bfbaee03affeacb7af7d878535248749ec35a4e575e1f5887fce1795c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0a73bfbaee03affeacb7af7d878535248749ec35a4e575e1f5887fce1795c1->enter($__internal_ec0a73bfbaee03affeacb7af7d878535248749ec35a4e575e1f5887fce1795c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ec0a73bfbaee03affeacb7af7d878535248749ec35a4e575e1f5887fce1795c1->leave($__internal_ec0a73bfbaee03affeacb7af7d878535248749ec35a4e575e1f5887fce1795c1_prof);

        
        $__internal_10e139bb05ac30be610905d0eb0df2952ecf38e10e2cf2f493a6586d69226d50->leave($__internal_10e139bb05ac30be610905d0eb0df2952ecf38e10e2cf2f493a6586d69226d50_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
