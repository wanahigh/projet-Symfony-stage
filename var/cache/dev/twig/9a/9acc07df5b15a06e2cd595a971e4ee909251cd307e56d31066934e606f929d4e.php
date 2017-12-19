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
        $__internal_f07776655896b75fd9645c892f9dbf101a4c78c372d5c3e8c0dd65e9d433baed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f07776655896b75fd9645c892f9dbf101a4c78c372d5c3e8c0dd65e9d433baed->enter($__internal_f07776655896b75fd9645c892f9dbf101a4c78c372d5c3e8c0dd65e9d433baed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_d611608bd5c2e534b645f5e87ac09d1931231299b404c23e22298d520012f617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d611608bd5c2e534b645f5e87ac09d1931231299b404c23e22298d520012f617->enter($__internal_d611608bd5c2e534b645f5e87ac09d1931231299b404c23e22298d520012f617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_f07776655896b75fd9645c892f9dbf101a4c78c372d5c3e8c0dd65e9d433baed->leave($__internal_f07776655896b75fd9645c892f9dbf101a4c78c372d5c3e8c0dd65e9d433baed_prof);

        
        $__internal_d611608bd5c2e534b645f5e87ac09d1931231299b404c23e22298d520012f617->leave($__internal_d611608bd5c2e534b645f5e87ac09d1931231299b404c23e22298d520012f617_prof);

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
