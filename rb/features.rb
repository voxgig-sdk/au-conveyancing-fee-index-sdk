# AuConveyancingFeeIndex SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/ratelimit_feature'
require_relative 'feature/retry_feature'
require_relative 'feature/test_feature'
require_relative 'feature/timeout_feature'


module AuConveyancingFeeIndexFeatures
  def self.make_feature(name)
    case name
    when "base"
      AuConveyancingFeeIndexBaseFeature.new
    when "ratelimit"
      AuConveyancingFeeIndexRatelimitFeature.new
    when "retry"
      AuConveyancingFeeIndexRetryFeature.new
    when "test"
      AuConveyancingFeeIndexTestFeature.new
    when "timeout"
      AuConveyancingFeeIndexTimeoutFeature.new
    else
      AuConveyancingFeeIndexBaseFeature.new
    end
  end
end
