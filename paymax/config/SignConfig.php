<?php
/**
 * Created by xiaowei.wang
 * CreateTime: 16/7/7 下午3:08
 * Description:
 */

namespace Paymax\config;


class SignConfig
{
    //商户自己的私钥
    //样例 见 rsa_private_key.pem
    private static $privateKeyPath;
    private static $privateKey;

    //Paymax提供给商户的SecretKey，登录网站后查看
    private static $secretKey;

    //Paymax提供给商户的公钥路径
    //【登录网站后查看,把它保存到一个pem文件中】
    //样例 见 paymax_rsa_public_key.pem
    private static $paymaxPublicKeyPath;
    private static $paymaxPublicKey;

    /**
     * @return mixed
     */
    public static function getPrivateKeyPath()
    {
        return self::$privateKeyPath;
    }

    public static function getPrivateKey()
    {
        return self::$privateKey;
    }

    /**
     * @param mixed $privateKeyPath
     */
    public static function setPrivateKeyPath($privateKey)
    {
        self::$privateKey = $privateKey;
    }

    public static function setPrivateKey($privateKey)
    {
        self::$privateKey = $privateKey;
    }

    /**
     * @return mixed
     */
    public static function getSecretKey()
    {
        return self::$secretKey;
    }

    /**
     * @param mixed $secretKey
     */
    public static function setSecretKey($secretKey)
    {
        self::$secretKey = $secretKey;
    }

    /**
     * @return mixed
     */
    public static function getPaymaxPublicKeyPath()
    {
        return self::$paymaxPublicKeyPath;
    }

    /**
     * @param mixed $paymaxPublicKeyPath
     */
    public static function setPaymaxPublicKeyPath($paymaxPublicKeyPath)
    {
        self::$paymaxPublicKeyPath = $paymaxPublicKeyPath;
    }

    /**
     * @return mixed
     */
    public static function getPaymaxPublicKey()
    {
        return self::$paymaxPublicKey;
    }

    /**
     * @param mixed $paymaxPublicKey
     */
    public static function setPaymaxPublicKey($paymaxPublicKey)
    {
        self::$paymaxPublicKey = $paymaxPublicKey;
    }

}