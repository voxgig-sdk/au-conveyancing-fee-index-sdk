# AuConveyancingFeeIndex SDK utility: prepare_body
require_relative 'media'
module AuConveyancingFeeIndexUtilities
  PrepareBody = ->(ctx) {
    return nil unless ctx.op.input == "data"
    return AuConveyancingFeeIndexUtilities.raw_body(ctx.reqdata) if AuConveyancingFeeIndexUtilities.raw_request?(ctx.point)
    ctx.utility.transform_request.call(ctx)
  }
end
