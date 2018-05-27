<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/05/28
 * Time: 8:43
 */

function max_min(float ...$args): array{
    return [max($args),min($args)];
}