<?php

namespace Ecs\Request\V20140526;

/**
 * Request of CreateLaunchTemplateVersion
 *
 * @method string getLaunchTemplateName()
 * @method string getResourceOwnerId()
 * @method string getSecurityEnhancementStrategy()
 * @method string getNetworkType()
 * @method string getKeyPairName()
 * @method string getSpotPriceLimit()
 * @method string getImageOwnerAlias()
 * @method string getResourceGroupId()
 * @method string getHostName()
 * @method string getSystemDiskIops()
 * @method array getTags()
 * @method string getPeriod()
 * @method string getLaunchTemplateId()
 * @method string getOwnerId()
 * @method string getVSwitchId()
 * @method string getSpotStrategy()
 * @method string getInstanceName()
 * @method string getInternetChargeType()
 * @method string getZoneId()
 * @method string getInternetMaxBandwidthIn()
 * @method string getVersionDescription()
 * @method string getImageId()
 * @method string getIoOptimized()
 * @method string getSecurityGroupId()
 * @method string getInternetMaxBandwidthOut()
 * @method string getDescription()
 * @method string getSystemDiskCategory()
 * @method string getUserData()
 * @method string getPasswordInherit()
 * @method string getInstanceType()
 * @method string getInstanceChargeType()
 * @method string getEnableVmOsConfig()
 * @method array getNetworkInterfaces()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSystemDiskDiskName()
 * @method string getRamRoleName()
 * @method string getAutoReleaseTime()
 * @method string getSpotDuration()
 * @method array getDataDisks()
 * @method string getSystemDiskSize()
 * @method string getVpcId()
 * @method string getSystemDiskDescription()
 */
class CreateLaunchTemplateVersionRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Ecs',
            '2014-05-26',
            'CreateLaunchTemplateVersion',
            'ecs'
        );
    }

    /**
     * @param string $launchTemplateName
     *
     * @return $this
     */
    public function setLaunchTemplateName($launchTemplateName)
    {
        $this->requestParameters['LaunchTemplateName'] = $launchTemplateName;
        $this->queryParameters['LaunchTemplateName'] = $launchTemplateName;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $securityEnhancementStrategy
     *
     * @return $this
     */
    public function setSecurityEnhancementStrategy($securityEnhancementStrategy)
    {
        $this->requestParameters['SecurityEnhancementStrategy'] = $securityEnhancementStrategy;
        $this->queryParameters['SecurityEnhancementStrategy'] = $securityEnhancementStrategy;

        return $this;
    }

    /**
     * @param string $networkType
     *
     * @return $this
     */
    public function setNetworkType($networkType)
    {
        $this->requestParameters['NetworkType'] = $networkType;
        $this->queryParameters['NetworkType'] = $networkType;

        return $this;
    }

    /**
     * @param string $keyPairName
     *
     * @return $this
     */
    public function setKeyPairName($keyPairName)
    {
        $this->requestParameters['KeyPairName'] = $keyPairName;
        $this->queryParameters['KeyPairName'] = $keyPairName;

        return $this;
    }

    /**
     * @param string $spotPriceLimit
     *
     * @return $this
     */
    public function setSpotPriceLimit($spotPriceLimit)
    {
        $this->requestParameters['SpotPriceLimit'] = $spotPriceLimit;
        $this->queryParameters['SpotPriceLimit'] = $spotPriceLimit;

        return $this;
    }

    /**
     * @param string $imageOwnerAlias
     *
     * @return $this
     */
    public function setImageOwnerAlias($imageOwnerAlias)
    {
        $this->requestParameters['ImageOwnerAlias'] = $imageOwnerAlias;
        $this->queryParameters['ImageOwnerAlias'] = $imageOwnerAlias;

        return $this;
    }

    /**
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function setResourceGroupId($resourceGroupId)
    {
        $this->requestParameters['ResourceGroupId'] = $resourceGroupId;
        $this->queryParameters['ResourceGroupId'] = $resourceGroupId;

        return $this;
    }

    /**
     * @param string $hostName
     *
     * @return $this
     */
    public function setHostName($hostName)
    {
        $this->requestParameters['HostName'] = $hostName;
        $this->queryParameters['HostName'] = $hostName;

        return $this;
    }

    /**
     * @param string $systemDiskIops
     *
     * @return $this
     */
    public function setSystemDiskIops($systemDiskIops)
    {
        $this->requestParameters['SystemDiskIops'] = $systemDiskIops;
        $this->queryParameters['SystemDisk.Iops'] = $systemDiskIops;

        return $this;
    }

    /**
     * @param array $tags
     *
     * @return $this
     */
    public function setTags(array $tags)
    {
        $this->requestParameters['Tags'] = $tags;
        foreach ($tags as $i => $iValue) {
            $this->queryParameters['Tag.' . ($i + 1) . '.Key'] = $tags[$i]['Key'];
            $this->queryParameters['Tag.' . ($i + 1) . '.Value'] = $tags[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->requestParameters['Period'] = $period;
        $this->queryParameters['Period'] = $period;

        return $this;
    }

    /**
     * @param string $launchTemplateId
     *
     * @return $this
     */
    public function setLaunchTemplateId($launchTemplateId)
    {
        $this->requestParameters['LaunchTemplateId'] = $launchTemplateId;
        $this->queryParameters['LaunchTemplateId'] = $launchTemplateId;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function setVSwitchId($vSwitchId)
    {
        $this->requestParameters['VSwitchId'] = $vSwitchId;
        $this->queryParameters['VSwitchId'] = $vSwitchId;

        return $this;
    }

    /**
     * @param string $spotStrategy
     *
     * @return $this
     */
    public function setSpotStrategy($spotStrategy)
    {
        $this->requestParameters['SpotStrategy'] = $spotStrategy;
        $this->queryParameters['SpotStrategy'] = $spotStrategy;

        return $this;
    }

    /**
     * @param string $instanceName
     *
     * @return $this
     */
    public function setInstanceName($instanceName)
    {
        $this->requestParameters['InstanceName'] = $instanceName;
        $this->queryParameters['InstanceName'] = $instanceName;

        return $this;
    }

    /**
     * @param string $internetChargeType
     *
     * @return $this
     */
    public function setInternetChargeType($internetChargeType)
    {
        $this->requestParameters['InternetChargeType'] = $internetChargeType;
        $this->queryParameters['InternetChargeType'] = $internetChargeType;

        return $this;
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        $this->requestParameters['ZoneId'] = $zoneId;
        $this->queryParameters['ZoneId'] = $zoneId;

        return $this;
    }

    /**
     * @param string $internetMaxBandwidthIn
     *
     * @return $this
     */
    public function setInternetMaxBandwidthIn($internetMaxBandwidthIn)
    {
        $this->requestParameters['InternetMaxBandwidthIn'] = $internetMaxBandwidthIn;
        $this->queryParameters['InternetMaxBandwidthIn'] = $internetMaxBandwidthIn;

        return $this;
    }

    /**
     * @param string $versionDescription
     *
     * @return $this
     */
    public function setVersionDescription($versionDescription)
    {
        $this->requestParameters['VersionDescription'] = $versionDescription;
        $this->queryParameters['VersionDescription'] = $versionDescription;

        return $this;
    }

    /**
     * @param string $imageId
     *
     * @return $this
     */
    public function setImageId($imageId)
    {
        $this->requestParameters['ImageId'] = $imageId;
        $this->queryParameters['ImageId'] = $imageId;

        return $this;
    }

    /**
     * @param string $ioOptimized
     *
     * @return $this
     */
    public function setIoOptimized($ioOptimized)
    {
        $this->requestParameters['IoOptimized'] = $ioOptimized;
        $this->queryParameters['IoOptimized'] = $ioOptimized;

        return $this;
    }

    /**
     * @param string $securityGroupId
     *
     * @return $this
     */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->requestParameters['SecurityGroupId'] = $securityGroupId;
        $this->queryParameters['SecurityGroupId'] = $securityGroupId;

        return $this;
    }

    /**
     * @param string $internetMaxBandwidthOut
     *
     * @return $this
     */
    public function setInternetMaxBandwidthOut($internetMaxBandwidthOut)
    {
        $this->requestParameters['InternetMaxBandwidthOut'] = $internetMaxBandwidthOut;
        $this->queryParameters['InternetMaxBandwidthOut'] = $internetMaxBandwidthOut;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $systemDiskCategory
     *
     * @return $this
     */
    public function setSystemDiskCategory($systemDiskCategory)
    {
        $this->requestParameters['SystemDiskCategory'] = $systemDiskCategory;
        $this->queryParameters['SystemDisk.Category'] = $systemDiskCategory;

        return $this;
    }

    /**
     * @param string $userData
     *
     * @return $this
     */
    public function setUserData($userData)
    {
        $this->requestParameters['UserData'] = $userData;
        $this->queryParameters['UserData'] = $userData;

        return $this;
    }

    /**
     * @param string $passwordInherit
     *
     * @return $this
     */
    public function setPasswordInherit($passwordInherit)
    {
        $this->requestParameters['PasswordInherit'] = $passwordInherit;
        $this->queryParameters['PasswordInherit'] = $passwordInherit;

        return $this;
    }

    /**
     * @param string $instanceType
     *
     * @return $this
     */
    public function setInstanceType($instanceType)
    {
        $this->requestParameters['InstanceType'] = $instanceType;
        $this->queryParameters['InstanceType'] = $instanceType;

        return $this;
    }

    /**
     * @param string $instanceChargeType
     *
     * @return $this
     */
    public function setInstanceChargeType($instanceChargeType)
    {
        $this->requestParameters['InstanceChargeType'] = $instanceChargeType;
        $this->queryParameters['InstanceChargeType'] = $instanceChargeType;

        return $this;
    }

    /**
     * @param string $enableVmOsConfig
     *
     * @return $this
     */
    public function setEnableVmOsConfig($enableVmOsConfig)
    {
        $this->requestParameters['EnableVmOsConfig'] = $enableVmOsConfig;
        $this->queryParameters['EnableVmOsConfig'] = $enableVmOsConfig;

        return $this;
    }

    /**
     * @param array $networkInterfaces
     *
     * @return $this
     */
    public function setNetworkInterfaces(array $networkInterfaces)
    {
        $this->requestParameters['NetworkInterfaces'] = $networkInterfaces;
        foreach ($networkInterfaces as $i => $iValue) {
            $this->queryParameters['NetworkInterface.' . ($i + 1) . '.PrimaryIpAddress'] = $networkInterfaces[$i]['PrimaryIpAddress'];
            $this->queryParameters['NetworkInterface.' . ($i + 1) . '.VSwitchId'] = $networkInterfaces[$i]['VSwitchId'];
            $this->queryParameters['NetworkInterface.' . ($i + 1) . '.SecurityGroupId'] = $networkInterfaces[$i]['SecurityGroupId'];
            $this->queryParameters['NetworkInterface.' . ($i + 1) . '.NetworkInterfaceName'] = $networkInterfaces[$i]['NetworkInterfaceName'];
            $this->queryParameters['NetworkInterface.' . ($i + 1) . '.Description'] = $networkInterfaces[$i]['Description'];
        }

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $systemDiskDiskName
     *
     * @return $this
     */
    public function setSystemDiskDiskName($systemDiskDiskName)
    {
        $this->requestParameters['SystemDiskDiskName'] = $systemDiskDiskName;
        $this->queryParameters['SystemDisk.DiskName'] = $systemDiskDiskName;

        return $this;
    }

    /**
     * @param string $ramRoleName
     *
     * @return $this
     */
    public function setRamRoleName($ramRoleName)
    {
        $this->requestParameters['RamRoleName'] = $ramRoleName;
        $this->queryParameters['RamRoleName'] = $ramRoleName;

        return $this;
    }

    /**
     * @param string $autoReleaseTime
     *
     * @return $this
     */
    public function setAutoReleaseTime($autoReleaseTime)
    {
        $this->requestParameters['AutoReleaseTime'] = $autoReleaseTime;
        $this->queryParameters['AutoReleaseTime'] = $autoReleaseTime;

        return $this;
    }

    /**
     * @param string $spotDuration
     *
     * @return $this
     */
    public function setSpotDuration($spotDuration)
    {
        $this->requestParameters['SpotDuration'] = $spotDuration;
        $this->queryParameters['SpotDuration'] = $spotDuration;

        return $this;
    }

    /**
     * @param array $dataDisks
     *
     * @return $this
     */
    public function setDataDisks(array $dataDisks)
    {
        $this->requestParameters['DataDisks'] = $dataDisks;
        foreach ($dataDisks as $i => $iValue) {
            $this->queryParameters['DataDisk.' . ($i + 1) . '.Size'] = $dataDisks[$i]['Size'];
            $this->queryParameters['DataDisk.' . ($i + 1) . '.SnapshotId'] = $dataDisks[$i]['SnapshotId'];
            $this->queryParameters['DataDisk.' . ($i + 1) . '.Category'] = $dataDisks[$i]['Category'];
            $this->queryParameters['DataDisk.' . ($i + 1) . '.Encrypted'] = $dataDisks[$i]['Encrypted'];
            $this->queryParameters['DataDisk.' . ($i + 1) . '.DiskName'] = $dataDisks[$i]['DiskName'];
            $this->queryParameters['DataDisk.' . ($i + 1) . '.Description'] = $dataDisks[$i]['Description'];
            $this->queryParameters['DataDisk.' . ($i + 1) . '.DeleteWithInstance'] = $dataDisks[$i]['DeleteWithInstance'];
            $this->queryParameters['DataDisk.' . ($i + 1) . '.Device'] = $dataDisks[$i]['Device'];
        }

        return $this;
    }

    /**
     * @param string $systemDiskSize
     *
     * @return $this
     */
    public function setSystemDiskSize($systemDiskSize)
    {
        $this->requestParameters['SystemDiskSize'] = $systemDiskSize;
        $this->queryParameters['SystemDisk.Size'] = $systemDiskSize;

        return $this;
    }

    /**
     * @param string $vpcId
     *
     * @return $this
     */
    public function setVpcId($vpcId)
    {
        $this->requestParameters['VpcId'] = $vpcId;
        $this->queryParameters['VpcId'] = $vpcId;

        return $this;
    }

    /**
     * @param string $systemDiskDescription
     *
     * @return $this
     */
    public function setSystemDiskDescription($systemDiskDescription)
    {
        $this->requestParameters['SystemDiskDescription'] = $systemDiskDescription;
        $this->queryParameters['SystemDisk.Description'] = $systemDiskDescription;

        return $this;
    }
}
