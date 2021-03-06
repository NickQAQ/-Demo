<?php
/**
 * @name IndexController
 * @author 小王同学\小王同学
 * @desc 榛樿鎺у埗鍣�
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class IndexController extends Yaf_Controller_Abstract {

	/** 
     * 榛樿鍔ㄤ綔
     * Yaf鏀寔鐩存帴鎶奩af_Request_Abstract::getParam()寰楀埌鐨勫悓鍚嶅弬鏁颁綔涓篈ction鐨勫舰鍙�
     * 瀵逛簬濡備笅鐨勪緥瀛�, 褰撹闂甴ttp://yourhost/yaf/index/index/index/name/小王同学\小王同学 鐨勬椂鍊�, 浣犲氨浼氬彂鐜颁笉鍚�
     */
	public function indexAction($name = "Stranger") {
		//1. fetch query
		$get = $this->getRequest()->getQuery("get", "default value");

		//2. fetch model
		$model = new SampleModel();

		//3. assign
		$this->getView()->assign("content", $model->selectSample());
		$this->getView()->assign("name", $name);

		//4. render by Yaf, 濡傛灉杩欓噷杩斿洖FALSE, Yaf灏嗕笉浼氳皟鐢ㄨ嚜鍔ㄨ鍥惧紩鎿嶳ender妯℃澘
        return TRUE;
	}
}
