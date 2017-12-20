<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2b615e761bfed31166d09958f6695559bc9e196820eff59d889af7db1bf40ec2 extends Twig_Template
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
        $__internal_c73fcf1da50277a0d478ad902811a90318b6f24afa9cf0882506da2459ba42d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c73fcf1da50277a0d478ad902811a90318b6f24afa9cf0882506da2459ba42d5->enter($__internal_c73fcf1da50277a0d478ad902811a90318b6f24afa9cf0882506da2459ba42d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_5e371c77739d8e22d5576f01ca5ff01e61bdb14fbbe00c44f0f906eb78415f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e371c77739d8e22d5576f01ca5ff01e61bdb14fbbe00c44f0f906eb78415f0b->enter($__internal_5e371c77739d8e22d5576f01ca5ff01e61bdb14fbbe00c44f0f906eb78415f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c73fcf1da50277a0d478ad902811a90318b6f24afa9cf0882506da2459ba42d5->leave($__internal_c73fcf1da50277a0d478ad902811a90318b6f24afa9cf0882506da2459ba42d5_prof);

        
        $__internal_5e371c77739d8e22d5576f01ca5ff01e61bdb14fbbe00c44f0f906eb78415f0b->leave($__internal_5e371c77739d8e22d5576f01ca5ff01e61bdb14fbbe00c44f0f906eb78415f0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
