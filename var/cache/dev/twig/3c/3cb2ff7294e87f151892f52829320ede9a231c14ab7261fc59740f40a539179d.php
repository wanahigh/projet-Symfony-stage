<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9da032d9e006e712a25926552283262f55a6e96512ccd7350ae51433a01f5f94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b45f284b4c7675ed76f2308ae57873f01d4c83ce274ae30b1f3662ebaa9248f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b45f284b4c7675ed76f2308ae57873f01d4c83ce274ae30b1f3662ebaa9248f1->enter($__internal_b45f284b4c7675ed76f2308ae57873f01d4c83ce274ae30b1f3662ebaa9248f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_862956e5ade66cb84f627c55b9ba955856277b402174799628dc056f87bfdc5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_862956e5ade66cb84f627c55b9ba955856277b402174799628dc056f87bfdc5e->enter($__internal_862956e5ade66cb84f627c55b9ba955856277b402174799628dc056f87bfdc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b45f284b4c7675ed76f2308ae57873f01d4c83ce274ae30b1f3662ebaa9248f1->leave($__internal_b45f284b4c7675ed76f2308ae57873f01d4c83ce274ae30b1f3662ebaa9248f1_prof);

        
        $__internal_862956e5ade66cb84f627c55b9ba955856277b402174799628dc056f87bfdc5e->leave($__internal_862956e5ade66cb84f627c55b9ba955856277b402174799628dc056f87bfdc5e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_558ff19652e7c05b87ee9422a1739a8a50a5fb92ffa13d6fb76a58bd38121049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_558ff19652e7c05b87ee9422a1739a8a50a5fb92ffa13d6fb76a58bd38121049->enter($__internal_558ff19652e7c05b87ee9422a1739a8a50a5fb92ffa13d6fb76a58bd38121049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3996b14fc85696b1c4561e9ae39f47e4984e7edb709672a1e8b985e7bef29cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3996b14fc85696b1c4561e9ae39f47e4984e7edb709672a1e8b985e7bef29cc9->enter($__internal_3996b14fc85696b1c4561e9ae39f47e4984e7edb709672a1e8b985e7bef29cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3996b14fc85696b1c4561e9ae39f47e4984e7edb709672a1e8b985e7bef29cc9->leave($__internal_3996b14fc85696b1c4561e9ae39f47e4984e7edb709672a1e8b985e7bef29cc9_prof);

        
        $__internal_558ff19652e7c05b87ee9422a1739a8a50a5fb92ffa13d6fb76a58bd38121049->leave($__internal_558ff19652e7c05b87ee9422a1739a8a50a5fb92ffa13d6fb76a58bd38121049_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_34934991a2d821d27e511354778ad1e7c89aea3c1d2c814e2014317c1282a468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34934991a2d821d27e511354778ad1e7c89aea3c1d2c814e2014317c1282a468->enter($__internal_34934991a2d821d27e511354778ad1e7c89aea3c1d2c814e2014317c1282a468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40f0aade796a01dda46f307e8415f182b523702ef016461dc655c8659d806689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f0aade796a01dda46f307e8415f182b523702ef016461dc655c8659d806689->enter($__internal_40f0aade796a01dda46f307e8415f182b523702ef016461dc655c8659d806689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_40f0aade796a01dda46f307e8415f182b523702ef016461dc655c8659d806689->leave($__internal_40f0aade796a01dda46f307e8415f182b523702ef016461dc655c8659d806689_prof);

        
        $__internal_34934991a2d821d27e511354778ad1e7c89aea3c1d2c814e2014317c1282a468->leave($__internal_34934991a2d821d27e511354778ad1e7c89aea3c1d2c814e2014317c1282a468_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
