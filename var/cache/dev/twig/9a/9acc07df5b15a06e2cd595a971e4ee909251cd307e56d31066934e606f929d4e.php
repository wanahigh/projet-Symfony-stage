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
        $__internal_e389b109f86c9fd2fc21759745ba5ca525322901bb359e9da35542bc037eaf85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e389b109f86c9fd2fc21759745ba5ca525322901bb359e9da35542bc037eaf85->enter($__internal_e389b109f86c9fd2fc21759745ba5ca525322901bb359e9da35542bc037eaf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_5bdd8636049b5a62ca47357ac94dadd05cad4758c14a22dec11b3f6663943cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bdd8636049b5a62ca47357ac94dadd05cad4758c14a22dec11b3f6663943cf3->enter($__internal_5bdd8636049b5a62ca47357ac94dadd05cad4758c14a22dec11b3f6663943cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_e389b109f86c9fd2fc21759745ba5ca525322901bb359e9da35542bc037eaf85->leave($__internal_e389b109f86c9fd2fc21759745ba5ca525322901bb359e9da35542bc037eaf85_prof);

        
        $__internal_5bdd8636049b5a62ca47357ac94dadd05cad4758c14a22dec11b3f6663943cf3->leave($__internal_5bdd8636049b5a62ca47357ac94dadd05cad4758c14a22dec11b3f6663943cf3_prof);

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
