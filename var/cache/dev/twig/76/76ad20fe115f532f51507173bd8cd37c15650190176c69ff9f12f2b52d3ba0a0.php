<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_4ba636259aa58625e42626aded9d5e70dad2845ca36f5c4cdad59c70d048f3f1 extends Twig_Template
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
        $__internal_5693c1fafe56988fa9c6a5e483d2f4b4383b664ce74daf829318b274b1ab9131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5693c1fafe56988fa9c6a5e483d2f4b4383b664ce74daf829318b274b1ab9131->enter($__internal_5693c1fafe56988fa9c6a5e483d2f4b4383b664ce74daf829318b274b1ab9131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_fd46619c611ecdf4f83ff65e86ec5d2e432f7177f1d4de298cdedb75a55f4698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd46619c611ecdf4f83ff65e86ec5d2e432f7177f1d4de298cdedb75a55f4698->enter($__internal_fd46619c611ecdf4f83ff65e86ec5d2e432f7177f1d4de298cdedb75a55f4698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5693c1fafe56988fa9c6a5e483d2f4b4383b664ce74daf829318b274b1ab9131->leave($__internal_5693c1fafe56988fa9c6a5e483d2f4b4383b664ce74daf829318b274b1ab9131_prof);

        
        $__internal_fd46619c611ecdf4f83ff65e86ec5d2e432f7177f1d4de298cdedb75a55f4698->leave($__internal_fd46619c611ecdf4f83ff65e86ec5d2e432f7177f1d4de298cdedb75a55f4698_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
