<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b37bc502eb42b863c78dba08d2e1f4ef1425c382d72819f82dc1e9257de360d3 extends Twig_Template
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
        $__internal_055dd898bbf381b3dffd2c147e5aabb2cc20b66411587b072366ffe77792480a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055dd898bbf381b3dffd2c147e5aabb2cc20b66411587b072366ffe77792480a->enter($__internal_055dd898bbf381b3dffd2c147e5aabb2cc20b66411587b072366ffe77792480a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_a76a9ca048ddf2396cc59499ee92c5459a614a08db51032fb91b106a64f2b558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76a9ca048ddf2396cc59499ee92c5459a614a08db51032fb91b106a64f2b558->enter($__internal_a76a9ca048ddf2396cc59499ee92c5459a614a08db51032fb91b106a64f2b558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_055dd898bbf381b3dffd2c147e5aabb2cc20b66411587b072366ffe77792480a->leave($__internal_055dd898bbf381b3dffd2c147e5aabb2cc20b66411587b072366ffe77792480a_prof);

        
        $__internal_a76a9ca048ddf2396cc59499ee92c5459a614a08db51032fb91b106a64f2b558->leave($__internal_a76a9ca048ddf2396cc59499ee92c5459a614a08db51032fb91b106a64f2b558_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
