<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_19e30f9a918ee9ac94204210b002ce44de79f239e7fb32bb3ed31bdcd3f5822f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_4759783e953104d20eaec7e6024a0a8bbc6e12cf19a906f15c28e0eafc68e102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4759783e953104d20eaec7e6024a0a8bbc6e12cf19a906f15c28e0eafc68e102->enter($__internal_4759783e953104d20eaec7e6024a0a8bbc6e12cf19a906f15c28e0eafc68e102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_4a1b0b7ea8d5a039287b22aaa40d1a3aca5352b3777d9d49ec7e2f7f80837047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1b0b7ea8d5a039287b22aaa40d1a3aca5352b3777d9d49ec7e2f7f80837047->enter($__internal_4a1b0b7ea8d5a039287b22aaa40d1a3aca5352b3777d9d49ec7e2f7f80837047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4759783e953104d20eaec7e6024a0a8bbc6e12cf19a906f15c28e0eafc68e102->leave($__internal_4759783e953104d20eaec7e6024a0a8bbc6e12cf19a906f15c28e0eafc68e102_prof);

        
        $__internal_4a1b0b7ea8d5a039287b22aaa40d1a3aca5352b3777d9d49ec7e2f7f80837047->leave($__internal_4a1b0b7ea8d5a039287b22aaa40d1a3aca5352b3777d9d49ec7e2f7f80837047_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3322932c85226304e5afb9a63482c7f0c54cc32abff952ed84dc950ae35cad3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3322932c85226304e5afb9a63482c7f0c54cc32abff952ed84dc950ae35cad3b->enter($__internal_3322932c85226304e5afb9a63482c7f0c54cc32abff952ed84dc950ae35cad3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_faa89fd9af34f795697560f345d870c91a01b607f1b60f6869daf788d34845e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa89fd9af34f795697560f345d870c91a01b607f1b60f6869daf788d34845e9->enter($__internal_faa89fd9af34f795697560f345d870c91a01b607f1b60f6869daf788d34845e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_faa89fd9af34f795697560f345d870c91a01b607f1b60f6869daf788d34845e9->leave($__internal_faa89fd9af34f795697560f345d870c91a01b607f1b60f6869daf788d34845e9_prof);

        
        $__internal_3322932c85226304e5afb9a63482c7f0c54cc32abff952ed84dc950ae35cad3b->leave($__internal_3322932c85226304e5afb9a63482c7f0c54cc32abff952ed84dc950ae35cad3b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
