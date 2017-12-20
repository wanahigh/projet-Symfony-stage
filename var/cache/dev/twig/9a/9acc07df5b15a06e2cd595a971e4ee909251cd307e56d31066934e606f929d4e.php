<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_cb49e50cc7d672ff15de0de093f7c1e7f8eae3a8411d71acd6b7fb74e8091d0c extends Twig_Template
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
        $__internal_462f246e37a0290e670b7dbf0723e5360a657d474d2bb4343e73c96d50ff35eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_462f246e37a0290e670b7dbf0723e5360a657d474d2bb4343e73c96d50ff35eb->enter($__internal_462f246e37a0290e670b7dbf0723e5360a657d474d2bb4343e73c96d50ff35eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_1fafdd568e8e7a53ff1ddf0786ef0fad435b468d16b05a5924ed1cf968298a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fafdd568e8e7a53ff1ddf0786ef0fad435b468d16b05a5924ed1cf968298a5a->enter($__internal_1fafdd568e8e7a53ff1ddf0786ef0fad435b468d16b05a5924ed1cf968298a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_462f246e37a0290e670b7dbf0723e5360a657d474d2bb4343e73c96d50ff35eb->leave($__internal_462f246e37a0290e670b7dbf0723e5360a657d474d2bb4343e73c96d50ff35eb_prof);

        
        $__internal_1fafdd568e8e7a53ff1ddf0786ef0fad435b468d16b05a5924ed1cf968298a5a->leave($__internal_1fafdd568e8e7a53ff1ddf0786ef0fad435b468d16b05a5924ed1cf968298a5a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
