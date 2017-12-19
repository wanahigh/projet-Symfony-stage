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
        $__internal_92b1c235fd7151d423ff4c471254ef9d652814b65dfcfd7fe7d886fe6dee79a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92b1c235fd7151d423ff4c471254ef9d652814b65dfcfd7fe7d886fe6dee79a0->enter($__internal_92b1c235fd7151d423ff4c471254ef9d652814b65dfcfd7fe7d886fe6dee79a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_b0685422ee9f80fe28d29c6ccb5781c7368bac6394ac02b5b528f62f696b63d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0685422ee9f80fe28d29c6ccb5781c7368bac6394ac02b5b528f62f696b63d5->enter($__internal_b0685422ee9f80fe28d29c6ccb5781c7368bac6394ac02b5b528f62f696b63d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92b1c235fd7151d423ff4c471254ef9d652814b65dfcfd7fe7d886fe6dee79a0->leave($__internal_92b1c235fd7151d423ff4c471254ef9d652814b65dfcfd7fe7d886fe6dee79a0_prof);

        
        $__internal_b0685422ee9f80fe28d29c6ccb5781c7368bac6394ac02b5b528f62f696b63d5->leave($__internal_b0685422ee9f80fe28d29c6ccb5781c7368bac6394ac02b5b528f62f696b63d5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ee472904f159b4385522f773475e16a26aacce555e13ff953368b122060e08b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ee472904f159b4385522f773475e16a26aacce555e13ff953368b122060e08b->enter($__internal_8ee472904f159b4385522f773475e16a26aacce555e13ff953368b122060e08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9c53ce30df53cbe1a499ea0a0f63ff05d24955f1930fb1e1de17774aa7d27377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c53ce30df53cbe1a499ea0a0f63ff05d24955f1930fb1e1de17774aa7d27377->enter($__internal_9c53ce30df53cbe1a499ea0a0f63ff05d24955f1930fb1e1de17774aa7d27377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_9c53ce30df53cbe1a499ea0a0f63ff05d24955f1930fb1e1de17774aa7d27377->leave($__internal_9c53ce30df53cbe1a499ea0a0f63ff05d24955f1930fb1e1de17774aa7d27377_prof);

        
        $__internal_8ee472904f159b4385522f773475e16a26aacce555e13ff953368b122060e08b->leave($__internal_8ee472904f159b4385522f773475e16a26aacce555e13ff953368b122060e08b_prof);

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
