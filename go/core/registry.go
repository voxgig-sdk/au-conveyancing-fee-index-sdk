package core

var UtilityRegistrar func(u *Utility)

var NewBaseFeatureFunc func() Feature

var NewRatelimitFeatureFunc func() Feature

var NewRetryFeatureFunc func() Feature

var NewTestFeatureFunc func() Feature

var NewTimeoutFeatureFunc func() Feature

var NewEnquiryEntityFunc func(client *AuConveyancingFeeIndexSDK, entopts map[string]any) AuConveyancingFeeIndexEntity

var NewMcpEntityFunc func(client *AuConveyancingFeeIndexSDK, entopts map[string]any) AuConveyancingFeeIndexEntity

