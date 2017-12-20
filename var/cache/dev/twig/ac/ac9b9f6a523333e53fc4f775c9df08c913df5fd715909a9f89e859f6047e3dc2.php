<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b0b62c2a463974e672c3f444e80020993e9e26580fdc9caf0969eee452a8da4b extends Twig_Template
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
        $__internal_06feeb12a4a5406fad4f79f3f60697b16dd4e42e4b9ead2b66a89835a8007997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06feeb12a4a5406fad4f79f3f60697b16dd4e42e4b9ead2b66a89835a8007997->enter($__internal_06feeb12a4a5406fad4f79f3f60697b16dd4e42e4b9ead2b66a89835a8007997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_0721a6bb25d5024ae341157277c556f6b006de19be1fa976a32a6c40fc32d8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0721a6bb25d5024ae341157277c556f6b006de19be1fa976a32a6c40fc32d8f0->enter($__internal_0721a6bb25d5024ae341157277c556f6b006de19be1fa976a32a6c40fc32d8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_06feeb12a4a5406fad4f79f3f60697b16dd4e42e4b9ead2b66a89835a8007997->leave($__internal_06feeb12a4a5406fad4f79f3f60697b16dd4e42e4b9ead2b66a89835a8007997_prof);

        
        $__internal_0721a6bb25d5024ae341157277c556f6b006de19be1fa976a32a6c40fc32d8f0->leave($__internal_0721a6bb25d5024ae341157277c556f6b006de19be1fa976a32a6c40fc32d8f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
