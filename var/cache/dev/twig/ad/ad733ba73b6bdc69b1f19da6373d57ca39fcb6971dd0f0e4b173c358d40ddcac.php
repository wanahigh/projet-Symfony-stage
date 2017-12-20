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
        $__internal_17a8432f3a5b2498221c494905e3cbaebab21da34f884f292750972df63d4633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17a8432f3a5b2498221c494905e3cbaebab21da34f884f292750972df63d4633->enter($__internal_17a8432f3a5b2498221c494905e3cbaebab21da34f884f292750972df63d4633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_0106ddcebae228713483c44033b916860489e902c86d055e8bc26160de81f6c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0106ddcebae228713483c44033b916860489e902c86d055e8bc26160de81f6c1->enter($__internal_0106ddcebae228713483c44033b916860489e902c86d055e8bc26160de81f6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_17a8432f3a5b2498221c494905e3cbaebab21da34f884f292750972df63d4633->leave($__internal_17a8432f3a5b2498221c494905e3cbaebab21da34f884f292750972df63d4633_prof);

        
        $__internal_0106ddcebae228713483c44033b916860489e902c86d055e8bc26160de81f6c1->leave($__internal_0106ddcebae228713483c44033b916860489e902c86d055e8bc26160de81f6c1_prof);

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
