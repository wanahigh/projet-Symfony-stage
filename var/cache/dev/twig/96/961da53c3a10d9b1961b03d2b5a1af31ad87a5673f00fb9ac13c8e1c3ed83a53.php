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
        $__internal_48f14e113c3cfc874e66a38c0511c213c4610937db1cafe94aae2ce2d2d116ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48f14e113c3cfc874e66a38c0511c213c4610937db1cafe94aae2ce2d2d116ed->enter($__internal_48f14e113c3cfc874e66a38c0511c213c4610937db1cafe94aae2ce2d2d116ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_3204df10a5237ecfe0dcc47af797308226d5fdfbf1437556e5ff4364ca8f6aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3204df10a5237ecfe0dcc47af797308226d5fdfbf1437556e5ff4364ca8f6aaf->enter($__internal_3204df10a5237ecfe0dcc47af797308226d5fdfbf1437556e5ff4364ca8f6aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_48f14e113c3cfc874e66a38c0511c213c4610937db1cafe94aae2ce2d2d116ed->leave($__internal_48f14e113c3cfc874e66a38c0511c213c4610937db1cafe94aae2ce2d2d116ed_prof);

        
        $__internal_3204df10a5237ecfe0dcc47af797308226d5fdfbf1437556e5ff4364ca8f6aaf->leave($__internal_3204df10a5237ecfe0dcc47af797308226d5fdfbf1437556e5ff4364ca8f6aaf_prof);

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
