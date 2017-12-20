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
        $__internal_d26eae8b1f4c1192e4be27e3cb19ce12ead2c847244dc3f1c83e3c65a507a2da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d26eae8b1f4c1192e4be27e3cb19ce12ead2c847244dc3f1c83e3c65a507a2da->enter($__internal_d26eae8b1f4c1192e4be27e3cb19ce12ead2c847244dc3f1c83e3c65a507a2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_3522420f9c2d5fb14801bdc01dbd8bad57d3015df61abd73310c479df5ba0aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3522420f9c2d5fb14801bdc01dbd8bad57d3015df61abd73310c479df5ba0aeb->enter($__internal_3522420f9c2d5fb14801bdc01dbd8bad57d3015df61abd73310c479df5ba0aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d26eae8b1f4c1192e4be27e3cb19ce12ead2c847244dc3f1c83e3c65a507a2da->leave($__internal_d26eae8b1f4c1192e4be27e3cb19ce12ead2c847244dc3f1c83e3c65a507a2da_prof);

        
        $__internal_3522420f9c2d5fb14801bdc01dbd8bad57d3015df61abd73310c479df5ba0aeb->leave($__internal_3522420f9c2d5fb14801bdc01dbd8bad57d3015df61abd73310c479df5ba0aeb_prof);

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
