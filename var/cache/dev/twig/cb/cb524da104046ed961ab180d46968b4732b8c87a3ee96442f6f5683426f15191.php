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
        $__internal_8f490dd9b24e4e1693ec2bfd45b31f898abd7b71a6ddd8df47a7a3604da66015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f490dd9b24e4e1693ec2bfd45b31f898abd7b71a6ddd8df47a7a3604da66015->enter($__internal_8f490dd9b24e4e1693ec2bfd45b31f898abd7b71a6ddd8df47a7a3604da66015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_e2cd3de50d3ae86c5155bf672e0b620a9fab6e649a12649f32da295a557bf26f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2cd3de50d3ae86c5155bf672e0b620a9fab6e649a12649f32da295a557bf26f->enter($__internal_e2cd3de50d3ae86c5155bf672e0b620a9fab6e649a12649f32da295a557bf26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f490dd9b24e4e1693ec2bfd45b31f898abd7b71a6ddd8df47a7a3604da66015->leave($__internal_8f490dd9b24e4e1693ec2bfd45b31f898abd7b71a6ddd8df47a7a3604da66015_prof);

        
        $__internal_e2cd3de50d3ae86c5155bf672e0b620a9fab6e649a12649f32da295a557bf26f->leave($__internal_e2cd3de50d3ae86c5155bf672e0b620a9fab6e649a12649f32da295a557bf26f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0581c8a0b80e194481279c8d48c56b76f25d5b8f919c5bc1467c621ef491de3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0581c8a0b80e194481279c8d48c56b76f25d5b8f919c5bc1467c621ef491de3c->enter($__internal_0581c8a0b80e194481279c8d48c56b76f25d5b8f919c5bc1467c621ef491de3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9c8090f8779ec640e821825fcf38accadb61e0ae72cc197b4f6777aad159e159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8090f8779ec640e821825fcf38accadb61e0ae72cc197b4f6777aad159e159->enter($__internal_9c8090f8779ec640e821825fcf38accadb61e0ae72cc197b4f6777aad159e159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_9c8090f8779ec640e821825fcf38accadb61e0ae72cc197b4f6777aad159e159->leave($__internal_9c8090f8779ec640e821825fcf38accadb61e0ae72cc197b4f6777aad159e159_prof);

        
        $__internal_0581c8a0b80e194481279c8d48c56b76f25d5b8f919c5bc1467c621ef491de3c->leave($__internal_0581c8a0b80e194481279c8d48c56b76f25d5b8f919c5bc1467c621ef491de3c_prof);

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
