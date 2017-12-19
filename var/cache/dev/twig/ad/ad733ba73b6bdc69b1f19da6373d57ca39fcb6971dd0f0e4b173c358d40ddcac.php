<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b9dc98a3bda9ef98121bf0d94aa51adcfd170c868e0d08a9d33bae0824d9d63c extends Twig_Template
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
        $__internal_05641c1264cbc56e2f61555d268635b5564fea814f0ea8ef6d3bec8ed8ad6c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05641c1264cbc56e2f61555d268635b5564fea814f0ea8ef6d3bec8ed8ad6c94->enter($__internal_05641c1264cbc56e2f61555d268635b5564fea814f0ea8ef6d3bec8ed8ad6c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_30080d94b5336c311e23eb158d52400cc53bb0fd5253b1e3eafbf8da248c77f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30080d94b5336c311e23eb158d52400cc53bb0fd5253b1e3eafbf8da248c77f9->enter($__internal_30080d94b5336c311e23eb158d52400cc53bb0fd5253b1e3eafbf8da248c77f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_05641c1264cbc56e2f61555d268635b5564fea814f0ea8ef6d3bec8ed8ad6c94->leave($__internal_05641c1264cbc56e2f61555d268635b5564fea814f0ea8ef6d3bec8ed8ad6c94_prof);

        
        $__internal_30080d94b5336c311e23eb158d52400cc53bb0fd5253b1e3eafbf8da248c77f9->leave($__internal_30080d94b5336c311e23eb158d52400cc53bb0fd5253b1e3eafbf8da248c77f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
