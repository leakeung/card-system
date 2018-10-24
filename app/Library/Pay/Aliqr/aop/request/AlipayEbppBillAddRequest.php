<?php
class AlipayEbppBillAddRequest { private $bankBillNo; private $billDate; private $billKey; private $chargeInst; private $extendField; private $merchantOrderNo; private $mobile; private $orderType; private $ownerName; private $payAmount; private $serviceAmount; private $subOrderType; private $trafficLocation; private $trafficRegulations; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setBankBillNo($sp17ab70) { $this->bankBillNo = $sp17ab70; $this->apiParas['bank_bill_no'] = $sp17ab70; } public function getBankBillNo() { return $this->bankBillNo; } public function setBillDate($sp70cbc8) { $this->billDate = $sp70cbc8; $this->apiParas['bill_date'] = $sp70cbc8; } public function getBillDate() { return $this->billDate; } public function setBillKey($spc77187) { $this->billKey = $spc77187; $this->apiParas['bill_key'] = $spc77187; } public function getBillKey() { return $this->billKey; } public function setChargeInst($sp40a25f) { $this->chargeInst = $sp40a25f; $this->apiParas['charge_inst'] = $sp40a25f; } public function getChargeInst() { return $this->chargeInst; } public function setExtendField($sp8daaa2) { $this->extendField = $sp8daaa2; $this->apiParas['extend_field'] = $sp8daaa2; } public function getExtendField() { return $this->extendField; } public function setMerchantOrderNo($spc079f8) { $this->merchantOrderNo = $spc079f8; $this->apiParas['merchant_order_no'] = $spc079f8; } public function getMerchantOrderNo() { return $this->merchantOrderNo; } public function setMobile($sp845afd) { $this->mobile = $sp845afd; $this->apiParas['mobile'] = $sp845afd; } public function getMobile() { return $this->mobile; } public function setOrderType($sp6efcea) { $this->orderType = $sp6efcea; $this->apiParas['order_type'] = $sp6efcea; } public function getOrderType() { return $this->orderType; } public function setOwnerName($spc16b82) { $this->ownerName = $spc16b82; $this->apiParas['owner_name'] = $spc16b82; } public function getOwnerName() { return $this->ownerName; } public function setPayAmount($spb274c8) { $this->payAmount = $spb274c8; $this->apiParas['pay_amount'] = $spb274c8; } public function getPayAmount() { return $this->payAmount; } public function setServiceAmount($sp641e0e) { $this->serviceAmount = $sp641e0e; $this->apiParas['service_amount'] = $sp641e0e; } public function getServiceAmount() { return $this->serviceAmount; } public function setSubOrderType($sp1f57a2) { $this->subOrderType = $sp1f57a2; $this->apiParas['sub_order_type'] = $sp1f57a2; } public function getSubOrderType() { return $this->subOrderType; } public function setTrafficLocation($sp929728) { $this->trafficLocation = $sp929728; $this->apiParas['traffic_location'] = $sp929728; } public function getTrafficLocation() { return $this->trafficLocation; } public function setTrafficRegulations($sp055343) { $this->trafficRegulations = $sp055343; $this->apiParas['traffic_regulations'] = $sp055343; } public function getTrafficRegulations() { return $this->trafficRegulations; } public function getApiMethodName() { return 'alipay.ebpp.bill.add'; } public function setNotifyUrl($spa00d19) { $this->notifyUrl = $spa00d19; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp8a30df) { $this->returnUrl = $sp8a30df; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($spb9b0b4) { $this->terminalType = $spb9b0b4; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($spf3f780) { $this->terminalInfo = $spf3f780; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp5992f8) { $this->prodCode = $sp5992f8; } public function setApiVersion($spc906d7) { $this->apiVersion = $spc906d7; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($sp48c449) { $this->needEncrypt = $sp48c449; } public function getNeedEncrypt() { return $this->needEncrypt; } }