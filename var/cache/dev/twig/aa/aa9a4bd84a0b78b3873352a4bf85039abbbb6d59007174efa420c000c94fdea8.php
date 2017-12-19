<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_ec67039d25ccec3bf9ca930b345388daa2d9d5af41bb9ca09518bd64f949842d extends Twig_Template
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
        $__internal_5373da0d3d4b4ba6343f589077006496e34d97f44d6edd4e253e6ea8138395a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5373da0d3d4b4ba6343f589077006496e34d97f44d6edd4e253e6ea8138395a7->enter($__internal_5373da0d3d4b4ba6343f589077006496e34d97f44d6edd4e253e6ea8138395a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_763497d8d0511c2f1f625008127f6fcac3f1ca6f6d423efbc43ee03eae50c750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763497d8d0511c2f1f625008127f6fcac3f1ca6f6d423efbc43ee03eae50c750->enter($__internal_763497d8d0511c2f1f625008127f6fcac3f1ca6f6d423efbc43ee03eae50c750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_5373da0d3d4b4ba6343f589077006496e34d97f44d6edd4e253e6ea8138395a7->leave($__internal_5373da0d3d4b4ba6343f589077006496e34d97f44d6edd4e253e6ea8138395a7_prof);

        
        $__internal_763497d8d0511c2f1f625008127f6fcac3f1ca6f6d423efbc43ee03eae50c750->leave($__internal_763497d8d0511c2f1f625008127f6fcac3f1ca6f6d423efbc43ee03eae50c750_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
