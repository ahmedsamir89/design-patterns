<?php


class KnifeFactory
{
    public static function createKnife(string $type): Knife
    {
        $type = strtolower($type);
        switch ($type) {
            case "kitchen":
                return new KitchenKnife();
            case "sharp":
                return new SharpKnife();
            case "other":
                return new OtherKnife();
            default:
                throw new Exception('Wrong Knife type');
        }
    }
}