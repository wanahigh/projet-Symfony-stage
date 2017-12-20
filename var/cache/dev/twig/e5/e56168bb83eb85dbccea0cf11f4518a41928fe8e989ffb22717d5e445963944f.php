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
        $__internal_ac5a898c5a6a93a36297631c49b43efa0ed38c205680b6c24e47f0f41ee62063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac5a898c5a6a93a36297631c49b43efa0ed38c205680b6c24e47f0f41ee62063->enter($__internal_ac5a898c5a6a93a36297631c49b43efa0ed38c205680b6c24e47f0f41ee62063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_b485ee57e5550ee0986f7bf14b19cd6cbf21df74dd5faff8b3a1ba851db90dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b485ee57e5550ee0986f7bf14b19cd6cbf21df74dd5faff8b3a1ba851db90dc9->enter($__internal_b485ee57e5550ee0986f7bf14b19cd6cbf21df74dd5faff8b3a1ba851db90dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_ac5a898c5a6a93a36297631c49b43efa0ed38c205680b6c24e47f0f41ee62063->leave($__internal_ac5a898c5a6a93a36297631c49b43efa0ed38c205680b6c24e47f0f41ee62063_prof);

        
        $__internal_b485ee57e5550ee0986f7bf14b19cd6cbf21df74dd5faff8b3a1ba851db90dc9->leave($__internal_b485ee57e5550ee0986f7bf14b19cd6cbf21df74dd5faff8b3a1ba851db90dc9_prof);

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
