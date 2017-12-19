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
        $__internal_3b0255e59c6b4655995f872d2c940af3e6134028a83c70e9d02e01a65c90a71b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b0255e59c6b4655995f872d2c940af3e6134028a83c70e9d02e01a65c90a71b->enter($__internal_3b0255e59c6b4655995f872d2c940af3e6134028a83c70e9d02e01a65c90a71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_6109ac14b3db88d6ceb4629a5be20b4d1dbf061783a1dc29ad61fb9962660915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6109ac14b3db88d6ceb4629a5be20b4d1dbf061783a1dc29ad61fb9962660915->enter($__internal_6109ac14b3db88d6ceb4629a5be20b4d1dbf061783a1dc29ad61fb9962660915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

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
        
        $__internal_3b0255e59c6b4655995f872d2c940af3e6134028a83c70e9d02e01a65c90a71b->leave($__internal_3b0255e59c6b4655995f872d2c940af3e6134028a83c70e9d02e01a65c90a71b_prof);

        
        $__internal_6109ac14b3db88d6ceb4629a5be20b4d1dbf061783a1dc29ad61fb9962660915->leave($__internal_6109ac14b3db88d6ceb4629a5be20b4d1dbf061783a1dc29ad61fb9962660915_prof);

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
