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
        $__internal_5fc6cda88d2e4f6437081d39e0b47c5cb119e4f2778203a069c4da1c71ec8e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fc6cda88d2e4f6437081d39e0b47c5cb119e4f2778203a069c4da1c71ec8e62->enter($__internal_5fc6cda88d2e4f6437081d39e0b47c5cb119e4f2778203a069c4da1c71ec8e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_181eebbd368299ebc13f075fa9b1eda59ba8fdabde1530a2bb9d16a8c4f3a98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181eebbd368299ebc13f075fa9b1eda59ba8fdabde1530a2bb9d16a8c4f3a98f->enter($__internal_181eebbd368299ebc13f075fa9b1eda59ba8fdabde1530a2bb9d16a8c4f3a98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fc6cda88d2e4f6437081d39e0b47c5cb119e4f2778203a069c4da1c71ec8e62->leave($__internal_5fc6cda88d2e4f6437081d39e0b47c5cb119e4f2778203a069c4da1c71ec8e62_prof);

        
        $__internal_181eebbd368299ebc13f075fa9b1eda59ba8fdabde1530a2bb9d16a8c4f3a98f->leave($__internal_181eebbd368299ebc13f075fa9b1eda59ba8fdabde1530a2bb9d16a8c4f3a98f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f73b0494024fa3f8ab08e58096171c8371321e679af4b6d6da61faf19cf8bd7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f73b0494024fa3f8ab08e58096171c8371321e679af4b6d6da61faf19cf8bd7f->enter($__internal_f73b0494024fa3f8ab08e58096171c8371321e679af4b6d6da61faf19cf8bd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cb5e7f3a24ecd9f65c214e2bd2c5603a789ac9807b572054879b1c13537c2656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5e7f3a24ecd9f65c214e2bd2c5603a789ac9807b572054879b1c13537c2656->enter($__internal_cb5e7f3a24ecd9f65c214e2bd2c5603a789ac9807b572054879b1c13537c2656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_cb5e7f3a24ecd9f65c214e2bd2c5603a789ac9807b572054879b1c13537c2656->leave($__internal_cb5e7f3a24ecd9f65c214e2bd2c5603a789ac9807b572054879b1c13537c2656_prof);

        
        $__internal_f73b0494024fa3f8ab08e58096171c8371321e679af4b6d6da61faf19cf8bd7f->leave($__internal_f73b0494024fa3f8ab08e58096171c8371321e679af4b6d6da61faf19cf8bd7f_prof);

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
