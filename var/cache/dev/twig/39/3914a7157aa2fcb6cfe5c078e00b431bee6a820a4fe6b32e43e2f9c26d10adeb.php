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
        $__internal_bf1476cbd0121c9ecc5d2a504c44baa68df21428a34a9de174cc25bbdbb1ccfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf1476cbd0121c9ecc5d2a504c44baa68df21428a34a9de174cc25bbdbb1ccfa->enter($__internal_bf1476cbd0121c9ecc5d2a504c44baa68df21428a34a9de174cc25bbdbb1ccfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_aff76008b5d489b59374b2c63a7b31022012e8e405057d66cfb7871fc0dcb418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff76008b5d489b59374b2c63a7b31022012e8e405057d66cfb7871fc0dcb418->enter($__internal_aff76008b5d489b59374b2c63a7b31022012e8e405057d66cfb7871fc0dcb418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf1476cbd0121c9ecc5d2a504c44baa68df21428a34a9de174cc25bbdbb1ccfa->leave($__internal_bf1476cbd0121c9ecc5d2a504c44baa68df21428a34a9de174cc25bbdbb1ccfa_prof);

        
        $__internal_aff76008b5d489b59374b2c63a7b31022012e8e405057d66cfb7871fc0dcb418->leave($__internal_aff76008b5d489b59374b2c63a7b31022012e8e405057d66cfb7871fc0dcb418_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f8cad242fb38f2ad5daa4facd7664d3664a46594408192b58d911324472d20e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8cad242fb38f2ad5daa4facd7664d3664a46594408192b58d911324472d20e2->enter($__internal_f8cad242fb38f2ad5daa4facd7664d3664a46594408192b58d911324472d20e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ae192d3e7176437167574890dd57801147f6f44d4794f930018f4b0daec5341d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae192d3e7176437167574890dd57801147f6f44d4794f930018f4b0daec5341d->enter($__internal_ae192d3e7176437167574890dd57801147f6f44d4794f930018f4b0daec5341d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ae192d3e7176437167574890dd57801147f6f44d4794f930018f4b0daec5341d->leave($__internal_ae192d3e7176437167574890dd57801147f6f44d4794f930018f4b0daec5341d_prof);

        
        $__internal_f8cad242fb38f2ad5daa4facd7664d3664a46594408192b58d911324472d20e2->leave($__internal_f8cad242fb38f2ad5daa4facd7664d3664a46594408192b58d911324472d20e2_prof);

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
