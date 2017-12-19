<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_ddc6e44dab7b6af02201cdc47ac2d2dc0ce35b217c0ee90210aef458137f3cf8 extends Twig_Template
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
        $__internal_f8ea8b1e05f877b60b55743aeea4f3d4f4920ac8554f6c03d494a44eff82f7be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8ea8b1e05f877b60b55743aeea4f3d4f4920ac8554f6c03d494a44eff82f7be->enter($__internal_f8ea8b1e05f877b60b55743aeea4f3d4f4920ac8554f6c03d494a44eff82f7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_9d19c11d51d5678c1bf9666ffd2581b0c7fdda23d0e7b71d0c564cad1d67bb6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d19c11d51d5678c1bf9666ffd2581b0c7fdda23d0e7b71d0c564cad1d67bb6c->enter($__internal_9d19c11d51d5678c1bf9666ffd2581b0c7fdda23d0e7b71d0c564cad1d67bb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_f8ea8b1e05f877b60b55743aeea4f3d4f4920ac8554f6c03d494a44eff82f7be->leave($__internal_f8ea8b1e05f877b60b55743aeea4f3d4f4920ac8554f6c03d494a44eff82f7be_prof);

        
        $__internal_9d19c11d51d5678c1bf9666ffd2581b0c7fdda23d0e7b71d0c564cad1d67bb6c->leave($__internal_9d19c11d51d5678c1bf9666ffd2581b0c7fdda23d0e7b71d0c564cad1d67bb6c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
