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
        $__internal_859147f75c93a35696a156b5dc0898da0bbf2a7820592a9bf2cd89e28a43de3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_859147f75c93a35696a156b5dc0898da0bbf2a7820592a9bf2cd89e28a43de3a->enter($__internal_859147f75c93a35696a156b5dc0898da0bbf2a7820592a9bf2cd89e28a43de3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_b67ee034f38cb85163b1d55be3fd2a2be695fcf9152bce1b2cf20bb1d52037ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67ee034f38cb85163b1d55be3fd2a2be695fcf9152bce1b2cf20bb1d52037ac->enter($__internal_b67ee034f38cb85163b1d55be3fd2a2be695fcf9152bce1b2cf20bb1d52037ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_859147f75c93a35696a156b5dc0898da0bbf2a7820592a9bf2cd89e28a43de3a->leave($__internal_859147f75c93a35696a156b5dc0898da0bbf2a7820592a9bf2cd89e28a43de3a_prof);

        
        $__internal_b67ee034f38cb85163b1d55be3fd2a2be695fcf9152bce1b2cf20bb1d52037ac->leave($__internal_b67ee034f38cb85163b1d55be3fd2a2be695fcf9152bce1b2cf20bb1d52037ac_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0bf5ccb876842c3cecf5f3de7f8c4be18b0ad130824d798966aa0b873e1d97e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf5ccb876842c3cecf5f3de7f8c4be18b0ad130824d798966aa0b873e1d97e7->enter($__internal_0bf5ccb876842c3cecf5f3de7f8c4be18b0ad130824d798966aa0b873e1d97e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3728df3be4151de6b4dbe09428492bab1d5c4183fffbf31fb47b835daca40aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3728df3be4151de6b4dbe09428492bab1d5c4183fffbf31fb47b835daca40aaf->enter($__internal_3728df3be4151de6b4dbe09428492bab1d5c4183fffbf31fb47b835daca40aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3728df3be4151de6b4dbe09428492bab1d5c4183fffbf31fb47b835daca40aaf->leave($__internal_3728df3be4151de6b4dbe09428492bab1d5c4183fffbf31fb47b835daca40aaf_prof);

        
        $__internal_0bf5ccb876842c3cecf5f3de7f8c4be18b0ad130824d798966aa0b873e1d97e7->leave($__internal_0bf5ccb876842c3cecf5f3de7f8c4be18b0ad130824d798966aa0b873e1d97e7_prof);

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
