# AuConveyancingFeeIndex SDK utility: make_context
require_relative '../core/context'
module AuConveyancingFeeIndexUtilities
  MakeContext = ->(ctxmap, basectx) {
    AuConveyancingFeeIndexContext.new(ctxmap, basectx)
  }
end
